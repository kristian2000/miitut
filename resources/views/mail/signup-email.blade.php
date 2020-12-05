Hello {{ $data['name'] }}
<br><br>
Welcome to my Website!
<br>
Please Click the below link to verify your email and activate your account!
<br><br>
<a href="http://{{ env('APP_URL') }}/verify?code={{$data['verification_code']}}">Click Here!</a>

<br><br>
Thank You!
<br>

