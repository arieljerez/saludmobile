@extends('layouts.app')
@section('content_title','Mis Datos')
@section('content')

  <div class="panel panel-default panel-info">
    <div class="panel-heading">Datos Personales</div>
    <div class="panel-body">
      <div class="card">
        <img class="card-img-top" width="150rem" src="/avatars/female-silhouette_7.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">{{ $paciente->NombreCompleto }}</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Historia Clinica: {{ $paciente->historia_clinica }}</li>
            <li class="list-group-item">Fecha Nacimiento: {{ $paciente->fecha_nacimiento }}</li>
            <li class="list-group-item">DNI: {{ $paciente->documento }}</li>
            <li class="list-group-item">Correo Electrónico: {{ $paciente->email }}</li>
            <li class="list-group-item">Sexo: {{ $paciente->sexo }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default panel-info">
    <div class="panel-heading">Coberturas</div>
    <div class="panel-body">
      <div class="card">
        @component('partials.coberturas',[
          'paciente' => $paciente,
          'nextButton' => ''
        ])
        @endcomponent
        </div>
      </div>
    </div>
  </div>

@endsection
