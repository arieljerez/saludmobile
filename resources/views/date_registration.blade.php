@extends('layouts.app')

@section('content')


<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step col-xs-3 col-md-3">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
      </div>
      <div class="stepwizard-step col-xs-3 col-md-3">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
      </div>
      <div class="stepwizard-step col-xs-3 col-md-3">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
      </div>
      <div class="stepwizard-step col-xs-3 col-md-3">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
      </div>
    </div>
</div>

  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Cobertura </h3>

          @php
            $healt_insurances = array();

            $healt_insurance = new \stdClass();
            $healt_insurance->insurance = "Medicus";
            $healt_insurance->plan = "Medicus 310";
            $healt_insurance->type_recruitment = "Laboral";
            $healt_insurance->affiliate_number = "8030564646";

            $healt_insurances[] = $healt_insurance;

            $healt_insurance = new \stdClass();
            $healt_insurance->insurance = "PRIVADO";
            $healt_insurance->plan = "PRIVADO VIP";
            $healt_insurance->type_recruitment = "PRIVADO";
            $healt_insurance->affiliate_number = "11100000001";

            $healt_insurances[] = $healt_insurance;

            $healt_insurance = new \stdClass();
            $healt_insurance->insurance = "Swiss Medical (SMG)";
            $healt_insurance->plan = "Plan 310";
            $healt_insurance->type_recruitment = "Laboral";
            $healt_insurance->affiliate_number = "9030964646";

            $healt_insurances[] = $healt_insurance;
          @endphp

          <div class="panel panel-default">
            @foreach($healt_insurances as $healt_insurance)
                @php
                  $i = $loop->index;
                @endphp

                <div class="panel-heading" role="tab" id="heading-{{ $i }}">
                  <h5 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $i }}" aria-expanded="false" aria-controls="collapse-{{ $i }}">
                      <i class="fa fa-credit-card fa-2x" aria-hidden="true" style="margin-right:3px"></i>
                      {{$healt_insurance->insurance}}
                    </a>
                    <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                  </h5>
                </div>

                <div id="collapse-{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $i }}">
                  <div class="panel-body">
                    <div class="form-group col-md-6">
                      <label class="control-label">{{ __('Cobertura') }}</label>
                      <input readonly="true" name="cobertura" maxlength="100" type="text" required="required" class="form-control" placeholder="Cobertura" value="{{ $healt_insurance->insurance }}" />
                      <label class="control-label">{{ __('Plan') }}</label>
                      <input readonly="true" name="plan" maxlength="100" type="text" required="required" class="form-control" placeholder="Plan" value="{{ $healt_insurance->plan }}" />
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label">{{ __('Tipo Contratacion') }}</label>
                      <input readonly="true" name="type_recruitment" maxlength="100" type="text" required="required" class="form-control" placeholder="Cobertura" value="{{ $healt_insurance->type_recruitment }}"  />
                      <label class="control-label">{{ __('Numero Afiliado') }}</label>
                      <input readonly="true" name="affiliate_number" maxlength="100" type="number" required="required" class="form-control" placeholder="Número Afiliado" value="{{ $healt_insurance->affiliate_number}}"  />
                    </div>
                  </div>
                </div>

            @endforeach
          </div>


        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Especialidad / Medico </h3>
          <div class="panel-group" id="especialidad_medico_accordion">

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-1">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#especialidad_medico_accordion" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                    <i class="fa fa-hospital-o fa-2x" aria-hidden="true" style="margin-right:3px"></i>
                    Por Especialidad
                  </a>
                </h5>
              </div>

              <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-5">
                <li class="list-group-item">Clinica Medica
                  <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                </li>
                <li class="list-group-item">Oftalmologia
                  <span class="btn btn-danger btn-sm pull-right"><i class="fa fa-ban" aria-hidden="true"></i></span>
                </li>
                <li class="list-group-item">Obstetricia
                  <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                </li>
              </div>

              <div class="panel-heading" role="tab" id="heading-1">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#especialidad_medico_accordion" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                    <i class="fa fa-user-md fa-2x" aria-hidden="true" style="margin-right:3px"></i>
                    Por Médico
                  </a>
                </h5>
              </div>

              <div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-6">

                  <ul class="list-group">
                    <li class="list-group-item">Carlota White
                      <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                    </li>
                    <li class="list-group-item">Elio Diaz
                      <span class="btn btn-danger btn-sm pull-right"><i class="fa fa-ban" aria-hidden="true"></i></span>
                    </li>
                    <li class="list-group-item">Osvaldo Dorna Del Trebol Perez
                      <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                    </li>
                  </ul>

              </div>

            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
            Especialidad / Médico / Fecha
          <div class="panel-group" id="accordion_especialidad">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_especialidad" href="#especialidad_collapse1"><span class="fa fa-hospital-o fa-2x"></span> Clinica Medica</a>
                </h4>
              </div>
              <div id="especialidad_collapse1" class="panel-collapse collapse">
                  @php
                    $fechas = array('Lunes','Martes','Miercoles','Jueves','Viernes');
                  @endphp

                  @foreach ($fechas as $fecha)

                    @php
                      $label = $loop->index > 0 ?  "success": "danger";
                      $index = $loop->index;
                    @endphp
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#fecha_collapse{{$loop->index}}">
                                <span aria-hidden="true" class="fa fa-calendar" style="margin-right: 3px;"></span>
                                2{{$loop->index}}/11/2017 {{$fecha}}</a>

                              <span class="label label-{{$label}}" style="float: right; margin-right: 3px;">{{$loop->index}}</span>
                            </h4>
                          </div>
                          <div id="fecha_collapse{{$loop->index}}" class="panel-collapse collapse">
                              @if ($index == 0)
                              <div class="list-group" style="background-color: ligthgrey">
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White </li>
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White </li>
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White </li>
                              </div>
                              @elseif($index > 0)
                                <div class="list-group" style="background-color: ligthgrey">
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White </a>
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White </a>
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White </a>
                                </div>
                              @endif

                          </div>
                        </div>
                      </div>
                    @endforeach

              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_especialidad" href="#especialidad_obstetricia_collapse1"><span class="fa fa-hospital-o fa-2x"></span> Obstetricia</a>
                </h4>
              </div>
              <div id="especialidad_obstetricia_collapse1" class="panel-collapse collapse">

                  @php
                    $fechas = array('Lunes','Martes','Miercoles','Jueves','Viernes');
                  @endphp

                  @foreach ($fechas as $fecha)

                    @php
                      $label = $loop->index > 0 ?  "success": "danger";
                      $index = $loop->index;
                    @endphp
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#fecha_collapse{{$loop->index}}">
                                <span aria-hidden="true" class="fa fa-calendar" style="margin-right: 3px;"></span>
                                2{{$loop->index}}/11/2017 {{$fecha}}</a>

                              <span class="label label-{{$label}}" style="float: right; margin-right: 3px;">{{$loop->index}}</span>
                            </h4>
                          </div>
                          <div id="fecha_collapse{{$loop->index}}" class="panel-collapse collapse">
                              @if ($index == 0)
                              <div class="list-group" style="background-color: ligthgrey">
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White </li>
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White </li>
                                <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White </li>
                              </div>
                              @elseif($index > 0)
                                <div class="list-group" style="background-color: ligthgrey">
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White </a>
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White </a>
                                  <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White </a>
                                </div>
                              @endif

                          </div>
                        </div>
                      </div>
                    @endforeach


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
        <h3> Turno Resevado </h3>

        </div>
      </div>
    </div>


  </form>


@endsection
@section('style')
    <link href="{{ asset('css/tab_wizard.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/tab_wizard.js') }}"></script>
@endsection
