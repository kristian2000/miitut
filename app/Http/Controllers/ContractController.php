<?php

namespace App\Http\Controllers;

use App\Models\CategoryUser;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Status;
use App\Models\Qualification;
use App\Models\User;
use App\Notifications\ContractNotification;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    public function getAll(){
        $user = Auth::user();

        $contracts = $user->contracts;
        
        return response()->json($contracts);
    }

    public function store(Request $request){
        $this->validate($request, [
            'dateStart' => 'date',
            'dateEnd' => 'date',
            'startTime' => 'date_format:H:i:s',
            'hours' => 'numeric',
            'address' => 'string',
            'message' => 'string',
            'daysSelected' => 'array',
            'categoryUser' => 'required',
            'typeContract' => 'string'
        ]);

        $user = Auth::user();
        $categoryUser = CategoryUser::find($request['categoryUser']);

        $contract = Contract::create([
            'status_id' => Status::where('name', 'pending')->first()->id,
            'user_id' => $user->id,
            'category_user_id' => $categoryUser->id,
            'date_start' => $request['dateStart'],
            'date_end' => $request['dateEnd'],
            'start_time' => $request['startTime'],
            'hours' => $request['hours'],
            'address' => $request['address'],
            'message' => $request['message'],
            'type_contract' => $request['typeContract'],
            'daysSelected' => $request['daysSelected'],
            'price' => $categoryUser->price
        ]);

        // enviar notificacion
        $categoryUser->user->notify(new ContractNotification($contract));

        return response()->json([
            'msg' => 'Contrato creado exitosamente',
            "contract" => $contract
        ]);
    }

    public function rejectContract(Contract $contract){
        $contract->status_id = Status::where('name', 'reject')->first()->id;
        $contract->save();

        // relaciones
        $contract->status;
        $contract->categoryUser;

        // enviar notificacion
        $contract->user->notify(new ContractNotification($contract));

        return response()->json([
            'msg' => '',
            'contract' => $contract
        ]);
    }

    public function acceptContract(Contract $contract){
        $contract->status_id = Status::where('name', 'pendingPayment')->first()->id;
        $contract->save();

        // relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // enviar notificacion
        $contract->user->notify(new ContractNotification($contract));

        return response()->json([
            'msg' => '',
            'contract' => $contract
        ]);
    }

    public function archiveContract(Contract $contract){
        return response()->json([
            'msg' => '',
        ]);
    }

    public function finalizeContract(Contract $contract){
        $user = Auth::user();

        $contract->status_id = Status::where('name', 'finalized')->first()->id;
        $contract->save();

        // relaciones
        $contract->status;
        $contract->categoryUser;
        $contract->user;

        // enviar notificacion

        if ($contract->user_id == $user->id){
            $contract->categoryUser->user->notify(new ContractNotification($contract));
        }else{
            $contract->user->notify(new ContractNotification($contract));
        }

        return response()->json([
            'msg' => 'Contrato Finalizado',
            'contract' => $contract
        ]);
    }

    public function cancelContract(){
        // Los Empleadores pueen cancelar su contrato
        return response()->json([
            'msg' => '',
        ]);
    }

    public function qualifyContract(Request $request){
        
        $score = $request['score'];
        $comment = $request['comment'];
        $contract = Contract::find($request['contract']);
        
        $user = Auth::user();
        $userOpuesto = $user->userType === 'help' ? 
            $contract->categoryUser->user
            : 
            $contract->user;
            
        // Verificar que la calificacion no exista
        // if ($user->userType == 'work' && $contract->qualification_hired_id){
        //     return response()->json([
        //         'status' => false,
        //         'msg' => 'Calificacion anteriormente ya ha sido realizada'
        //     ]);
        // }else if($contract->qualification_employer_id){
        //     return response()->json([
        //         'status' => false,
        //         'msg' => 'Calificacion anteriormente ya ha sido realizada'
        //     ]);
        // }

        // Se crea la calificacion
        $qualification = Qualification::create([
            "contract_id" => $contract->id,
            "user_id" => $user->id,
            'score' => $score,
            "comment" => $comment,
            "type" => $user->userType
        ]);

        // Se incrementa el score y las calificaciones del usuario opuesto
            $userOpuesto->score = $userOpuesto->score + $score;
            $userOpuesto->ratings = $userOpuesto->rating + 1;
            $userOpuesto->save();

        // Se modifica el contract
            if ($user->userType == 'work'){
                $contract->qualification_hired_id = $qualification->id;
                $contract->save();
            }else {
                $contract->qualification_employer_id = $qualification->id;
                $contract->save();
            }

            // relaciones
            $contract->status;
            $contract->categoryUser;
            $contract->user;

        return response()->json([
            'status' => true,
            'msg' => 'Calificacion Creada',
            'contract' => $contract,
            'qualification' => $qualification
        ]);
        
    }

}
