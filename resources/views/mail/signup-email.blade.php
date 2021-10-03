@extends('layouts.mail')

@section('content')
<h2>
Hola {{ $data['name'] }}
</h2>
<p>
Bienvenido a Miitut, tu plataforma digital de atención domiciliaria que facilita el contacto entre las familias y las personas que ofrecen sus servicios.
</p>
<p>
Haz clic para completar el registro.
</p>

<a href="{{ env('APP_URL') }}/verificar-codigo?code={{$data['verification_code']}}">Verificar Cuenta!</a>

<p>
¡¡¡Muchas gracias por confiar en nosotros!!!
</p>

@endsection