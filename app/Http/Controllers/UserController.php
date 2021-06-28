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
use Illuminate\Notifications\Notification;
use App\Http\Controllers\MailController;
use Stripe\Stripe;
use Stripe\Customer;

class UserController extends Controller
{
    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

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
                'url' => $url,
                "user" => $user

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
                
                // Actualizar fase del usuario
                if ($user->fase_registry === 'dni'){
                    if ($user->userType === 'work'){
                        $user->fase_registry = 'completeProfileWork';
                    }else {
                        $user->fase_registry = 'completed';
                    }

                    $user->save();

                }

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
                'msg' => 'Documento Subido, en espera de aprobacion',
                'user' => $user
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
        $user->update(array_merge($data , ['fase_registry' => 'dni']));

        // if ($user->userType === 'work'){
        //     $user->update(array_merge($data , ['fase_registry' => 'completeProfileWork']));
        // }else {
        //     $user->update(array_merge($data , ['fase_registry' => 'completed']));
        // }

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

    // public function destroyNotification($notif){
    //     $notification = Notification::find('ContractNotifications', $notif->id);
    //     return response()->json([
    //         'msg' => 'destroy',
    //         'notification' => $notification
    //     ]);
    // }
    public function paymentMethods(){
        $user = Auth::user();

        $methods = array();

        if( $user->hasPaymentMethod() ){
            foreach( $user->paymentMethods() as $method ){
                array_push( $methods, [
                    'id' => $method->id,
                    'type' =>$method->type,
                    'name' => $method->billing_details->name,
                    'brand' => $method->card->brand,
                    'last_four' => $method->card->last4,
                    'exp_month' => $method->card->exp_month,
                    'exp_year' => $method->card->exp_year,
                ] );
            }
        }

        return $methods;
    }

    public function getPaymentMethods(){
        $user = Auth::user();
        // $stripeCustomer = $user->createOrGetStripeCustomer();

        $methods = $this->paymentMethods();

        return response()->json( $methods );
    }

    public function removePaymentMethod( Request $request ){
        $user = Auth::user();
        $paymentMethodID = $request->get('id');

        $paymentMethods = $user->paymentMethods();

        foreach( $paymentMethods as $method ){
            if( $method->id == $paymentMethodID ){
                $method->delete();
                break;
            }
        }

        return response()->json([
            'status' => true,
            'msg' => "Removed Payment Method Successful",
            'paymentMethods' => []
        ]);
    }

    public function createPaymentMethod(Request $request){

        $user = Auth::user();
        $paymentMethodID =$request->paymentMethod['id'];

        $stripeCustomer = $user->createOrGetStripeCustomer();

        Customer::createSource($stripeCustomer->id, [
            'source' => $paymentMethodID
        ]);
    
        // $stripeCustomer->createSource($paymentMethodID);
        // $user->updateDefaultPaymentMethod( $paymentMethodID );

        $paymentMethods = $this->paymentMethods();

        return response()->json([
            'status' => true,
            'msg' => "Add Payment Method Successful",
            'paymentMethods' => $paymentMethods
        ]);
    }

    public function accountRetirement(Request $request){
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
            'msg' => 'account register',
            "user" => $user
        ]);
    }

    public function updateAccountRetirement(Request $request){
        $this->validate($request, [
            'nameOfBeneficiary' => 'string',
            'ccc' => 'string'
        ]);

        $user = Auth::user();

        $bankAccount =  BankAccount::where('user_id',  $user->id)->first();
        $bankAccount->nameOfBeneficiary = $request->nameOfBeneficiary;
        $bankAccount->ccc = $request->ccc;
        $bankAccount->save();

        return response()->json([
            'msg' => 'account update',
            'account' => $bankAccount
        ]);
    }

    public function showAccountRetirement(){
        $user = Auth::user();
        $account = $user->account;
        
        return response()->json([
            'account' => $account
        ]);
    }

    public function supportMessage(request $request){
        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            "message" => $request->message,
            "name" => 'Nombre'
        ];

        MailController::sendMessageSupport($data);

        return response()->json([
            'msg' => 'Envio de mensaje exitosamente'
        ]);
    }

    public function isPremium(){
        $user = Auth::user();

        return response()->json([
            'msg' => $user->isPremium()
        ]);
    }
}
