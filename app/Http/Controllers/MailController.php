<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testEmail;
use App\Mail\sendSignupEmail;
use App\Mail\sendResetPasswordEmail;
use App\Mail\sendMessageSupport;
use Mailgun\Mailgun;
use Illuminate\Mail\Mailable;

class MailController extends Mailable
{
    public function build(){
        
    }

    public static function testEmail(){
        // Funcional por ahora solo funciona con los usuario aprobados

        Mail::to('xpestana4@gmail.com')->send(new testEmail());
        return "enviado";
    }

    public static function sendSignupEmail($user){
        $data = [
            'email' => $user->email,
            'name' => $user->name,
            'verification_code' => $user->verification_code
        ];
        Mail::to($user->email)->send(new sendSignupEmail($data));
    }

    public static function sendResetPasswordEmail($user){
        $data = [
            'email' => $user->email,
            'name' => $user->name,
            'verification_code' => $user->verification_code
        ];

        Mail::to($user->email)->send(new sendResetPasswordEmail($data));

    }

    public static function sendMessageSupport($data){

        Mail::to($data['email'])->send(new sendMessageSupport($data));
    }
}
