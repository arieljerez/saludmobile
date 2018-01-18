@component('mail::message')
# Registro de usuario

*Recibimos los datos de su registro con éxito*

@component('mail::table')

### Datos Personales
|               |              |
| :-------------|:-------------|
| **Nombre**:   | {{$registropaciente->nombre}}  |
| **Apellido**: | {{$registropaciente->apellido}} |
| **Documeno**: | {{$registropaciente->documento}}|
| **Nacimiento**: |{{ $registropaciente->fecha_nacimiento}} |
| **Sexo:**: | {{$registropaciente->sexo}} |
### Datos Filiatorios
|              |              |
| :------------|:-------------|
| **Cobertura**:|{{$registropaciente->cobertura}}|
| **Plan**:    |{{$registropaciente->plan}}|
| **Nro Afiliado**: |{{$registropaciente->afiliado}}|
### Contacto
|               |              |
| :-------------|:-------------|
| **Email**:    | {{$registropaciente->email}}     |
| **Telefono 1**: | {{$registropaciente->telefono_1}}|
| **Telefono 2**: | {{$registropaciente->telefono_2}}|

@endcomponent

Gracias,<br>
Saludos Cordiales <br />
El equipo de {{ config('app.name') }}
@endcomponent
