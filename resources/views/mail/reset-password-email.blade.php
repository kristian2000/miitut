@extends('layouts.mail')

@section('content')

<h2>Hola {{ $data['name'] }}</h2>
<p>
Olvidaste tu contraseña!
</p>
<p>
Por favor click en el enlace para cambiarla!
</p>
<br>
<a href="{{env('APP_URL')}}//resetear-clave?email={{$data['email']}}&code={{$data['verification_code']}}">click aqui!</a>

<h6>
Gracias!
</h6>

@endsection