Hola {{ $data['name'] }}
<br><br>
Olvidaste tu contraseña!
<br>
Por favor click en el enlace para cambiarla!
<br><br>
<a href="{{env('APP_URL')}}/resetPassword?email={{$data['email']}}&code={{$data['verification_code']}}">click aqui!</a>

<br><br>
Gracias!
<br>