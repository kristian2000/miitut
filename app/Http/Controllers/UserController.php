<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            $path = 'storage/avatars';

            //Se mueve a la ruta
            $request->avatar->move(public_path($path), $picName);
            $url = $path.'/'.$picName;

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

    public function updateProfile(Request $request){

        $this->validate($request, [
            'phone' => 'string',
            'gender' => 'string',
            'address' => 'string',
            'birthdate' => 'date'
        ]);

        $data = $request->only(['phone', 'gender', 'address', 'birthdate']);

        $user = Auth::user();

        $user->update(array_merge($data , ['fase_registry' => 'updateProfile']));

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }
}
