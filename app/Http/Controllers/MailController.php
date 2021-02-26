<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailgun\Mailgun;

class MailController extends Controller
{

    public static function testEmail(){
        // Funcional por ahora solo funciona con los usuario aprobados

        $domain = env('MAILGUN_DOMAIN');
        $ms = Mailgun::create(env('MAILGUN_SECRET'));
        $ms->messages()->send($domain, [
                'from'	=> 'Miitut <miitut@gmail.com>',
                'to'	=> 'cherry <chgf1997@gmail.com>',
                'subject' => 'Hello',
                'text'	=> 'Testing prueba'
            ]
        );
    }

    public static function sendSignupEmail($user){
        $data = [
            'email' => $user->email,
            'name' => $user->name,
            'verification_code' => $user->verification_code
        ];

        $domain = env('MAILGUN_DOMAIN');
        $ms = Mailgun::create(env('MAILGUN_SECRET'));

        $ms->messages()->send($domain, [
                'from'	=> 'Miitut <miitut@gmail.com>',
                'to'	=> $user->name.'<'.$user->email. '>',
                'subject' => 'Verifica tu email!',
                'html' => view('mail.signup-email', [ 'data' => $data ])->render()
            ]
        );
    }

    public static function sendResetPasswordEmail($user){
        $data = [
            'email' => $user->email,
            'name' => $user->name,
            'verification_code' => $user->verification_code
        ];

        $domain = env('MAILGUN_DOMAIN');
        $ms = Mailgun::create(env('MAILGUN_SECRET'));

        $ms->messages()->send($domain, [
                'from'	=> 'Miitut <miitut@gmail.com>',
                'to'	=> $user->name.'<'.$user->email. '>',
                'subject' => 'Recuperar Contraseña!',
                'html' => view('mail.reset-password-email', [ 'data' => $data ])->render()
            ]
        );
    }
}
