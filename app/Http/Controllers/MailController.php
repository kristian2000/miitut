<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Mailgun\Mailgun;
use Illuminate\Mail\Mailable;

class MailController extends Mailable
{
    public function build(){
        
    }

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

        return $ms->messages()->send($domain, [
                'from'	=> 'Miitut <miitut@gmail.com>',
                'to'	=> $user->name.'<'.$user->email. '>',
                'subject' => 'Recuperar Contraseña!',
                'html' => view('mail.reset-password-email', [ 'data' => $data ])->render()
            ]
        );
    }

    public static function sendMessageSupport($data){

        $domain = env('MAILGUN_DOMAIN');
        $ms = Mailgun::create(env('MAILGUN_SECRET'));

        $ms->messages()->send($domain, [
                'from'	=> '<'.$data['email'].'>',
                'to'	=> "support miitut <miitutsystem@gmail.com>",
                'subject' => $data['subject'],
                'text'	=> $data['message']
                // 'html' => view('mail.support-message', [ 'message' => 'este es el mensaje'])->render()
            ]
        );
    }
}
