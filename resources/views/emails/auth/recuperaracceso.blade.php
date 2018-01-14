@component('mail::message')
# Recuperar Acceso

Hola<br>
Ha soliciado recuperar su clave de acceso:<br> 
<br>
DNI: {{ $documento }} <br>
Fecha Nacimiento: {{ $fecha_nacimiento }} <br>

Su clave: **{{ $clave }}** <br>

@component('mail::button', ['url' => route('inicio')])
Iniciar sesión
@endcomponent

Gracias,<br>
Saludos Cordiales<br>
El equipo de {{ config('app.name') }}
@endcomponent
