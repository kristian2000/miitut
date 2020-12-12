<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use App\Models\SocialProfile;
use App\Http\Controllers\MailController;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index (Request $request){
        return view('welcome');
    }

    /**
     * SignIn y verify confirma email
     * @param string $email
     * @param string $password
     */
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

            //El email debe estar verificado
            // if (!$user->email_check){
            //     Auth::logout();
            //     return response()->json([
            //         'msg' => 'Verifique su email para iniciar sesion'
            //     ], 403);
            // }

            return response()->json([
                'msg' => 'Login Exitoso, Bienvenido!',
                'user' => $user
            ]);

        }else{

            return response()->json([
                'msg' => 'Los datos no coinciden con nuestros registros'
            ], 401);
        }
    }

    /**
     * Logout user
     */

    public function logout(){
        Auth::logout();

        return response()->json([
            'msg' => 'Cerrado de Sesion Exitoso'
        ]);
    }

    /**
     * Create a new user instance after a valid registration
     */

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'bail|required|email|unique:users',
            'password' => 'bail|required|confirmed|min:6',
            'userType' => 'required|in:help,work',
            'category' => 'string'
        ], [
            'email.unique' => 'Email ya esta registrado por un usuario'
        ]);

        // Si envia la categoria se comienza a crear el anuncio

        // Se crea el usuario
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'verification_code' => sha1(time()),
            'userType' => $request['userType']
            ]);

        // Se envia en email de codigo de verificacion
        // MailController::sendSignupEmail($user);

        Auth::login($user, true);

        return response()->json([
            'msg' => 'Registro exitoso, Inicia sesion',
            'user' => $user
        ], 201);
    }

    /**
     * Verify Email
     * @param string $verification_code
     */

    public function verifyUserEmail(Request $request)
    {
        $this->validate($request, [
            'code' => 'required'
        ]);

        $user = User::where(['verification_code' => $request->code])->first();

        if ($user){
            $user->email_check = true;
            $user->save();

            return response()->json([
                "msg" => "Su email ha sido verificado. Iniciar Sesion"
            ]);
        }

        return response()->json([
            'msg' => 'El codigo no es valido'
        ], 400);
    }

    /**
     * Redirect a Login with social Profile
     */

    public function redirectToProvider($driver)
    {
        if ($driver == 'google' || $driver == 'facebook'){
            $url = Socialite::driver($driver)
                ->redirect()
                ->getTargetUrl();

            // dd($url);

            return $url;
        }

        return response()->json([
            "msg" => 'Profile Social not exits'
        ]);
    }

    /**
     * Login, Register Social Profile
     */

    public function handleProviderCallback($driver)
    {
        if ($driver != 'google' && $driver != 'facebook'){
            return response()->json([
                "msg" => 'Profile Social not exits'
            ]);
        }
        // $user = Socialite::driver($driver)->user();
        $user = Socialite::driver('google')->stateless()->user();

        if (!$user->token){
            return response()->json([
                "msg" => "Failed to login"
            ], 401);
        }

        $appUser = User::whereEmail($user->email)->first();

        if (!$appUser){

            // Crear un usuario
            $appUser = User::create([
                "name" => $user->name,
                "email" => $user->email,
                "password" => Str::random(7),
                "email_check" => true,
            ]);

            // Se crea el social Profile
            $newSocialProfile = SocialProfile::create([
                "user_id" => $appUser->id,
                "social_id" => $user->id,
                "social_name" => $driver,
                "social_avatar" => $user->avatar
            ]);
        }else{
            // El usuario ya existe
            $social_profile = $appUser->socialProfiles()->where('social_name', $driver)->first();

            if (!$social_profile){
                // Crear Socialprofile
                $newSocialProfile = SocialProfile::create([
                    "user_id" => $appUser->id,
                    "social_id" => $user->id,
                    "social_name" => $driver,
                    "social_avatar" => $user->avatar
                ]);
            }

            // Login al usuario y enviar el token
        }

        Auth::login($appUser, true);

        return response()->json([
            "user" => $appUser
        ]);

    }

}
