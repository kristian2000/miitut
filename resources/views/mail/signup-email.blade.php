Hola {{ $data['name'] }}
<br><br>
Bienvenido a Miitut, tu plataforma digital de atención domiciliaria que facilita el contacto entre las familias y las personas que ofrecen sus servicios.
<br>
Haz clic para completar el registro.
<br><br>
<a href="{{ env('APP_URL') }}/verify?code={{$data['verification_code']}}">Verificar Cuenta!</a>

<br><br>
¡¡¡Muchas gracias por confiar en nosotros!!!
<br>

