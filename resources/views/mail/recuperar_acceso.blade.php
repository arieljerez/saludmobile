@extends('auth.app')
@section('content')

      <div class="row">
          <div class=" col-md-8 col-md-offset-2"  >
            <div class="panel panel-default panel-info">
              <div class="panel-heading">Recuperar contraseña </div>
              <div class="panel-body">

                <div class="row">
                  <div class="col-md-12">
                    <p class="text-info">

                      Hola,<br />
                      Ha solicitado recuperar de su contraseña: <br />
                      <br />
                      DNI: {{ $dni }} <br />
                      Fecha de Nacimiento: {{ $fecha_nacimiento }}<br />

                      <h4> Contraseña: {{ $clave }}</h4></p>
                      <br /><br />
                      <p class="text-info">
                        Saludos Cordiales<br />
                        El equipo de  {{ config('app.name', 'saludmobile') }}<br />
                      </p>
                    <p>
                      <a href="{{ config('app.url', '') }}" class="btn btn-success btn-lg pull-right">Iniciar sesión</a>
                    </p>
                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
      </div>

@endsection
