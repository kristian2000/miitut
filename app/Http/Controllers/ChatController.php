<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Notifications\MessageNotification;

class ChatController extends Controller
{
    public function sendMessage(Request $request){
        $user = Auth::user();

        $user_work_id = null;
        $user_help_id = null;
        $message = $request['message'];
        $conversationId = $request['conversation'];

        // Diferenciar usuarios
        if ($user->userType == 'work'){
            $user_work_id = $user->id;
            $user_help_id = $request['to'];
        }else {
            $user_work_id = $request['to'];
            $user_help_id = $user->id;
        }

        $conversation = null;

        if ($conversationId){
            $conversation = Conversation::find($conversationId);
        }else {
            $conversation = Conversation::where('user_work_id', $user_work_id)
                ->where('user_help_id', $user_help_id)
                ->first();
        }
        
        if ($conversation != null){
            $conversation->message = $message;
            $conversation->status = false;
            $conversation->save();
        }else {
            $conversation = Conversation::create([
                'user_work_id' => $user_work_id,
                'user_help_id' => $user_help_id,
                'message' => $message,
                'status' => false,
                ]);
        }
        
        
        $newMessage = Message::create([
            'conversation_id' => $conversation->id,
            'user_id' => $user->id,
            'message' => $message
        ]);
            
        // relaciones
        $conversation->userWork;
        $conversation->userHelp;

        //enviar mensaje
        if ($user->userType == 'work'){
            $conversation->userHelp->notify(new MessageNotification($newMessage));
        }else {
            $conversation->userWork->notify(new MessageNotification($newMessage));
        }

        return response()->json([
            'msg' => 'Mensaje Enviado',
            'messages' => $conversation->messages,
            'conversation' => $conversation,

        ]);
    }

    public function getConversations(){
        $user = Auth::user();
        $userType = $user->userType == 'work' ? 'user_work_id' : 'user_help_id';

        $conversations = Conversation::where($userType, $user->id)
            ->with('userWork')
            ->with('userHelp')
            ->get();

        return response()->json([
            'msg' => 'Lista de Conversaciones',
            'conversations' => $conversations
        ]);
    }

    public function messagesConversation(Conversation $conversation){
        $messages = $conversation->messages;

        return response()->json([
            'msg' => 'Lista de Mensajes de la conversacion',
            'messages' => $messages
        ]);
    }
}
