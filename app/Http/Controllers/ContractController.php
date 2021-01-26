<?php

namespace App\Http\Controllers;

use App\Models\CategoryUser;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Status;
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
            'daysSelected' => $request['daysSelected']
        ]);

        return response()->json([
            'msg' => 'Contrato creado exitosamente',
            "contract" => $contract
        ]);
    }

}
