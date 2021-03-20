<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DocumentId;
use App\Models\Status;
use App\Models\Report;
use Illuminate\Support\Facades\Storage;
use App\Models\BankAccount;

class UserController extends Controller
{
    public function updateAvatar(Request $request){

        if ($request->hasFile('avatar')){
            $user = Auth::user();

            $ext = $request->avatar->extension();

            if ($ext !== 'jpg' && $ext !== 'jpeg' && $ext !== 'png' ){
                return response()->json([
                    'msg' => 'Avatar no es una imagen'
                ], 422);
            }

            $picName = $user->id.'.'.$ext;

            //Ruta de los avatars
            $path = 'avatars';

            //Se mueve a la ruta
            $request->avatar->move(public_path($path), $picName);
            $url = '/'.$path.'/'.$picName;

            //Se le asigna al usuario
            $user->avatar = $url;
            $user->save();

            return response()->json([
                'msg' => 'Avatar Updated!',
                'url' => $url

            ]);
        }

        return response()->json([
            'msg' => 'Avatar not valid',
        ], 422);
    }

    public function uploadDNI(Request $request){
        if ($request->hasFile('docFront') && $request->hasFile('docBack')){
            $user = Auth::user();

            $extDocFront = $request->docFront->extension();
            $extDocBack = $request->docBack->extension();

            // Validacion sencilla
            if ($extDocFront !== 'jpg' && $extDocFront !== 'jpeg' && $extDocFront !== 'png' ){
                return response()->json([
                    'msg' => 'El foto del ducumento de frente no es una imagen'
                ], 422);
            }

            if ($extDocBack !== 'jpg' && $extDocBack !== 'jpeg' && $extDocBack !== 'png' ){
                return response()->json([
                    'msg' => 'El foto del ducumeno posterior no es una imagen'
                ], 422);
            }

            $doc = DocumentId::where('user_id', $user->id)->first();
            // ruta de los documentos
            $path = public_path('DNIS/'.$user->id.'/');
            $picNameDocFront = 'docFront.'.$extDocFront;
            $picNameDocBack = 'docBack.'.$extDocBack;

            if (!$doc){
                // Se crea el documento de identificacion
                // Se mueven a esa ruta
                $request->docFront->move($path, $picNameDocFront);
                $request->docBack->move($path, $picNameDocBack);

                $dni = DocumentId::create([
                    'user_id' => $user->id,
                    'status_id' => Status::where('name', 'pending')->first()->id,
                    'img_front' => '/DNIS/'.$user->id.'/'.$picNameDocFront,
                    'img_back' => '/DNIS/'.$user->id.'/'.$picNameDocBack
                    ]);

                $dni->save();

            }else {
                $files = glob('DNIS/'.$user->id.'/*');
                foreach($files as $file){
                    if(is_file($file))
                    unlink($file); //elimino el fichero
                }

                $request->docFront->move($path, $picNameDocFront);
                $request->docBack->move($path, $picNameDocBack);

                $doc->status_id = Status::where('name', 'pending')->first()->id;
                $doc->img_front = $picNameDocFront;
                $doc->img_back = $picNameDocBack;
                $doc->save();
            }

            return response()->json([
                'msg' => 'Documento Subido, en espera de aprobacion'
            ]);
        }

        return response()->json([
            'msg' => 'docs DNI invalid'
        ], 422);
    }

    public function getInfoDNI(){
        $user = Auth::user();
        $doc = DocumentId::where('user_id', $user->id)->first();

        if ($doc){
            return response()->json([
                'isExists' => true,
                'msg' => 'Informacion del Documento',
                'create_at' => $doc->created_at,
                'status' => Status::where('id', $doc->status_id)->first()->name
            ]);
        }

        return response()->json([
            'msg' => 'El documento no existe',
            'isExists' => false
        ]);
    }

    public function updateProfile(Request $request){

        $this->validate($request, [
            'name' => 'string',
            'phone' => 'string',
            'gender' => 'string',
            'address' => 'string',
            'country' => 'string',
            'state' => 'string',
            'lat' => 'numeric',
            'lng' => 'numeric',
            'birthdate' => 'date',
            'description' => 'string',
            'dni' => 'string'
        ]);

        $data = $request->only([
            'name',
            'phone',
            'gender',
            'address',
            'country',
            'state',
            'birthdate',
            'description',
            'dni',
            'lat',
            'lng'
        ]);

        $user = Auth::user();

        $user->update($data);

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }

    public function completeProfile(Request $request){

        $this->validate($request, [
            'phone' => 'string',
            'gender' => 'string',
            'address' => 'string',
            'state' => 'string',
            'country' => 'string',
            'lat' => 'numeric',
            'lng' => 'numeric',
            'description' => 'string',
            'dni' => 'string',
            "nationality" => 'string',
            'own_vehicle' => 'boolean',
            "driving_license" => 'boolean',
            "first_aid" => 'boolean',
            "has_children" => 'boolean'
        ]);

        $data = $request->only([
            'phone',
            'gender',
            'address',
            'state',
            'country',
            'birthdate',
            'description',
            'dni',
            'lat',
            'lng',
            "nationality",
            'own_vehicle',
            "driving_license",
            "first_aid",
            "has_children"
        ]);

        $user = Auth::user();

        if ($user->userType === 'work'){
            $user->update(array_merge($data , ['fase_registry' => 'completeProfileWork']));
        }else {
            $user->update(array_merge($data , ['fase_registry' => 'completed']));
        }

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }

    public function reportUser(Request $request){
        $formReport = [
            'user_id' => Auth::user()->id,
            'user_reported' => $request['userReported'],
            'category_id' => $request['categoryReported'],
            'description' => $request['description']
        ];

        $report = Report::create($formReport);

        return response()->json([
            'msg' => 'Reporte creado exitosamente',
            'report' => $report
        ]);
    }

    public function listNotifications(){
        $user = Auth::user();
        $notifications = $user->unreadNotifications;

        return response()->json([
            'msg' => 'Lista de Notificaciones No leidas',
            'notifications' => $notifications
        ]);
    }

    public function notificationsMarkAsReads(){

        $user = Auth::user();
        $user->unreadNotifications()->update(['read_at' => now()]);

        return response()->json([
            'msg' => 'Notificaciones Marcadas como leidas'
        ]);
    }

    public function accountRetirement(request $request){
        $this->validate($request, [
            'nameOfBeneficiary' => 'string',
            'code' => 'string',
            'ccc' => 'string'
        ]);

        $user = Auth::user();
        $user->fase_registry = 'completed';
        $user->save();

        $bankAccount = new BankAccount();
        $bankAccount->user_id = $user->id;
        $bankAccount->nameOfBeneficiary = $request->nameOfBeneficiary;
        $bankAccount->code = $request->code;
        $bankAccount->ccc = $request->ccc;
        $bankAccount->save();

        return response()->json([
            'msg' => 'account register'
        ]);
    }

    public function showAccountRetirement(){
        $user = Auth::user();
        $account = $user->account;
        
        return response()->json([
            'account' => $account
        ]);
    }
}
