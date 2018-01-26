@extends('layouts.app')
@section('content')

<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
          <h3> Cobertura </h3>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
      </div>
    </div>
</div>

  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">


          <div class="panel panel-default">
              @include('turnos.wizard.cobertura')
          </div>

        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Especialidad / Medico </h3>
          @include('turnos.wizard.especialidad_medico')
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
            Fecha
            @include('turnos.wizard.fecha')
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
        <h3> Turno Resevado </h3>
        @include('turnos.wizard.reserva')
        </div>
      </div>
    </div>


  </form>

  <!-- Modal -->
  @include('turnos.wizard.confirmacion')

@endsection
@section('style')
    <link href="{{ asset('css/tab_wizard.css') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('js/tab_wizard.js') }}"></script>
@endsection
