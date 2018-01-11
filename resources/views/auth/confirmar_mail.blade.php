@extends('auth.app')
@section('content')

@if (session()->has('email'))
<div class="row">
    <div class=" col-md-6 col-md-offset-3"  >
      <div class="panel panel-default panel-success">
        <div class="panel-heading"> Correo Electrónico confirmado</div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p class="text-info">Se envió su acceso a {{session('email')}}</p>
              <a href="{{ route('login') }}" class="btn btn-success pull-right">Iniciar sesión</a>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
</div>

@else
<form action="{{ route('acceso_confirmar_email')}}" method="post">
  <div class="row">
      <div class=" col-md-6 col-md-offset-3"  >
        <div class="panel panel-default panel-info">
          <div class="panel-heading">Confirmar Correo Electrónico</div>
          <div class="panel-body">
            <p class="text-info">Confirme o rectifique su correo electrónico</p>
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group has-success">
                      <label class="control-label" for="email">Correo</label>
                      <input type="text" class="form-control input-error" id="email" name="email">
                      <label class="control-label" for="email">Correo Confirmación:</label>
                      <input type="text" class="form-control input-error" id="email_confirmation" name="email_confirmation">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <a href="{{ route('inicio') }}" type="button" name="button" class="btn btn-primary">Cancelar</a>
                  <button type="submit" name="button" class="btn btn-success pull-right">Confirmar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  {{ csrf_field() }}
</form>
@endif
@endsection
