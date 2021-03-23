<?php

namespace App\Http\Controllers;

use App\Models\CategoryUser;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Payment;
use App\Models\Status;
use App\Models\Qualification;
use App\Models\User;
use App\Notifications\ContractNotification;
use App\Notifications\RequestContractNotification;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestContract;

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

        // crear payment tipo sistema para que el admin libere
        $paymentIn = Payment::where('contract_id', $contract->id)->first();

        $paymentOut = new Payment();
        $paymentOut->method_payment = 'manual';
        $paymentOut->type_payment = 'withdrawal';
        $paymentOut->amount = $paymentIn->amount;
        $paymentOut->user_id = $paymentIn->user_id;
        $paymentOut->contract_id = $paymentIn->contract_id;
        $paymentOut->status_id = Status::where('name', 'pending')->first()->id;
        $paymentOut->type = 'out';
        $paymentOut->save();

        // falta mensaje al admin
        
        return response()->json([
            'msg' => 'Contrato Finalizado',
            'contract' => $contract
        ]);
    }

    public function meditationContract(Contract $contract){
        $user = Auth::user();

        $contract->status_id = Status::where('name', 'mediation')->first()->id;
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

    public function getCreateAd(){
        $user = Auth::user();

        $ads = $user->ads;

        return response()->json($ads);
    }

    public function createAd(Request $request){

        $this->validate($request, [
            'dateStart' => 'date',
            'dateEnd' => 'date',
            'startTime' => 'date_format:H:i:s',
            'hours' => 'numeric',
            'address' => 'string',
            'message' => 'string',
            'daysSelected' => 'array',
            'typeContract' => 'string',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        $user = Auth::user();
        $status = Status::where('name', 'pending')->first();

        $contract = Contract::create([
            'category_id' => $request['category'],
            'status_id' => $status->id,
            'user_id' => $user->id,
            'date_start' => $request['dateStart'],
            'date_end' => $request['dateEnd'],
            'start_time' => $request['startTime'],
            'hours' => $request['hours'],
            'address' => $request['address'],
            'message' => $request['message'],
            'type_contract' => $request['typeContract'],
            'daysSelected' => $request['daysSelected'],
            'price' => $request['price'],
            'ad' => true
        ]);

        $contract->category;
        $contract->status;
        $contract->user;
        $contract->requests;

        return response()->json([
            'status' => true,
            'msg' => 'Anuncio Creado',
            'ad' => $contract
        ]);
    }

    public function getOffers(){
        $user = Auth::user();
        $categoriesUser = $user->categories;
        $contractsOffer = [];

        $offers = Contract::where('ad', true)
            ->where('category_id', $categoriesUser[0]->category_id)
            ->with('category', 'status', 'user')
            ->get();

        // $contractsOffer = $offers;

        // foreach ($categoriesUser as $categoryUser){
        // }

        return response()->json([
            'offers' => $offers,
            'categoriesUser' => $categoriesUser
        ]);
    }

    
    public function destroyContract(Contract $contract){
        if ($contract){
            
            $contract->delete();
            
            return response()->json([
                'msg' => "Eliminacion correcta"
                ]);
        }
            
        return response()->json([
            'msg' => 'contract not exist'
        ], 401);
    }
        
    public function getRequestSendOffer(Contract $contract){
        $requestContract = RequestContract::where('contract_id', $contract->id)->first();

        if ($requestContract){
            return response()->json([
                'exists' => true,
                'msg' => 'Tiene Solicitud',
                'request' => $requestContract
            ]);
        }

        return response()->json([
            'exists' => false,
            'msg' => 'No tiene solicitud'
        ]);

    }

    public function requestOffer(Contract $contract, Request $request){
        $user = Auth::user();
        $status = Status::where('name', 'pending')->first();

        $categoryUser = CategoryUser::where('user_id', $user->id)
            ->where('category_id', $contract->category_id)
            ->first();

        // Agregar validaciones contract ad
        
        $requestContract = new RequestContract();
        $requestContract->contract_id = $contract->id;
        $requestContract->category_user_id = $categoryUser->id;
        $requestContract->status_id = $status->id;
        $requestContract->user_id = $user->id;
        $requestContract->message = '';

        $requestContract->save();

        // enviar notificacion
        $contract->user->notify(new RequestContractNotification($contract, 'send'));
            
        return response()->json([
            'msg' => 'Solicitud enviada exitosamente',
            "requestContract" => $requestContract
        ]);
    }

    public function acceptRequestContract(Contract $contract, RequestContract $requestContract){

        // se ajusta de contract ad a contrato en proceso
        $contract->ad = false;
        $contract->category_user_id = $requestContract->category_user_id;
        $contract->status_id = Status::where('name', 'pendingPayment')->first()->id;
        $contract->save();

        // enviar notificacion
        $requestContract->user->notify(new RequestContractNotification($contract, 'accept'));

        return response()->json([
            'msg' => "Solicitud aceptada correctamente"
        ]);
    }



}
