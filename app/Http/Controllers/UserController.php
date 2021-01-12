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

    public function updateProfile(Request $request){

        $this->validate($request, [
            'name' => 'string',
            'phone' => 'string',
            'gender' => 'string',
            'address' => 'string',
            'lat' => 'numeric',
            'lng' => 'numeric',
            'birthdate' => 'date',
            'description' => 'string',
            'dni' => 'string'
        ]);

        $data = $request->only(['name', 'phone', 'gender', 'address', 'birthdate', 'description', 'dni', 'lat', 'lng']);

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
            'lat' => 'numeric',
            'lng' => 'numeric',
            'description' => 'string',
            'dni' => 'string'
        ]);

        $data = $request->only(['phone', 'gender', 'address', 'birthdate', 'description', 'dni', 'lat', 'lng']);

        $user = Auth::user();

        if ($user->userType === 'work'){
            $user->update(array_merge($data , ['fase_registry' => 'registroWork']));
        }else {
            $user->update(array_merge($data , ['fase_registry' => 'completed']));
        }

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }

}
