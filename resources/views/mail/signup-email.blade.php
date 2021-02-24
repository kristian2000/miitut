Hola {{ $data['name'] }}
<br><br>
Bienvenido a Miitut!
<br>
Por favor click en el enlace para verificar su email y activar su cuenta!
<br><br>
<a href="{{ env('APP_URL') }}/verify?code={{$data['verification_code']}}">Verificar Cuenta!</a>

<br><br>
Gracias!
<br>

