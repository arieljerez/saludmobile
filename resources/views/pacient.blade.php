@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos Personales</div>

                <div class="panel-body">

                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  @if (session('pacient'))
                  {{--

                      <ul>
                      @foreach ($pacient as $key => $value)
                      <li>{{ $key }}  : {{ $value }}</il>
                      @endforeach
                      </ul>
                  --}}
                  <div class="card">
                    <img class="card-img-top" width="150rem" src="/avatars/female-silhouette_7.jpg" alt="Card image cap">
                    <div class="card-block">
                      <h4 class="card-title">{{ $pacient->apellido}}, {{ $pacient->Nombre }}</h4>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Historia Clinica: {{ $pacient->codigopaciente }}</li>
                        <li class="list-group-item">Fecha Nacimiento: {{ Carbon\Carbon::parse($pacient->FechaNacimiento)->format('d/m/Y') }}</li>
                        <li class="list-group-item">DNI: {{$pacient->documento }}</li>
                        <li class="list-group-item">Correo Electrónico: {{$pacient->Mail }}</li>
                      </ul>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
