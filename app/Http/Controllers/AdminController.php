<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\DocumentId;
use App\Models\Report;
use App\Models\Status;

class AdminController extends Controller
{
    public function getUsers(){
        $users = User::all();

        return response()->json($users);
    }

    public function updateUser(Request $request){
        $this->validate($request, [
            'id' => 'required|numeric',
            'name' => 'string',
            'phone' => 'nullable|string',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'state' => 'nullable|string',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'birthdate' => 'nullable|date',
            'description' => 'nullable|string',
            'dni' => 'nullable|string',
            "nationality" => 'nullable|string',
            'own_vehicle' => 'boolean',
            "driving_license" => 'boolean',
            "first_aid" => 'boolean',
            "has_children" => 'boolean'
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
            'lng',
            "nationality",
            'own_vehicle',
            "driving_license",
            "first_aid",
            "has_children"
        ]);

        // Verificar si es un admin
        // $user = Auth::user();

        $user = User::find($request['id']);
        $user->update($data);

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }

    public function getDocs(){
        $statusPending = Status::where('name', 'pending')->first();
        $docs = DocumentId::where('status_id', $statusPending->id)
            ->with('user')
            ->get();

        return response()->json([
            'docs' => $docs,
            'msg' => 'Documents Pendings'
        ]);
    }

    public function acceptDoc(DocumentId $doc){
        $statusAccept = Status::where('name', 'accept')->first();

        $doc->status_id = $statusAccept->id;
        $doc->save();

        return response()->json([
            'doc' => $doc,
            'msg' => 'Document '
            ]);
        }
        
    public function rejectDoc(DocumentId $doc){
        $statusReject = Status::where('name', 'reject')->first();

        $doc->status_id = $statusReject->id;
        $doc->save();

        return response()->json([
            'doc' => $doc,
            'msg' => 'Documents'
        ]);
    }

    public function getReports(){
        // $statusPending = Status::where('name', 'pending')->first();
        $docs = Report::with('userReported')->get();

        return response()->json([
            'docs' => $docs,
            'msg' => 'Reports'
        ]);
    }
}
