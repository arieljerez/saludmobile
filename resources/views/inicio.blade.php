@extends('layouts.app')
@section('content_title','Bienvenido')

@section('content')

<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Últimos profesionales</div>
  <div class="panel-body">
    <p>Aquí encontrará los últimos profesionales consultados</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    @foreach($ultimosProfesionales as $item)
      <li class="list-group-item">{{ $item['Profesional'] }}  - {{ $item['Especialidad'] }} <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span></li>
    @endforeach
  </ul>
  <div class="panel-footer">
    Haga click en <i class="fa fa-chevron-right" aria-hidden="true"></i> para tomar un nuevo turno
  </div>
</div>

@endsection
