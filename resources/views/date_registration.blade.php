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
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
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
                    <button class="btn btn-primary nextBtn pull-right" type="button" >Seleccionar</button>
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
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading-1">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                    <i class="fa fa-hospital-o fa-2x" aria-hidden="true" style="margin-right:3px"></i>
                    Por Especialidad
                  </a>
                </h5>
              </div>

              <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-5">
                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">Clinica Medica
                      <button class="label btn-success nextBtn pull-right" type="button">Seleccionar</button>
                      </li>
                    <li class="list-group-item">Oftalmologia <span class="label btn-danger pull-right" type="button">sin cobertura</span></li>
                    <li class="list-group-item">Obstetricia <button class="label btn-success nextBtn pull-right" type="button">Seleccionar</button></li>
                  </ul>
                </div>
              </div>

              <div class="panel-heading" role="tab" id="heading-1">
                <h5 class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                    <i class="fa fa-user-md fa-2x" aria-hidden="true" style="margin-right:3px"></i>
                    Por Médico
                  </a>
                </h5>
              </div>

              <div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-6">
                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">Clinica Medica
                      <button class="label btn-success nextBtn pull-right" type="button">Seleccionar</button>
                      </li>
                    <li class="list-group-item">Oftalmologia <span class="label btn-danger pull-right" type="button">sin cobertura</span></li>
                    <li class="list-group-item">Obstetricia <button class="label btn-success nextBtn pull-right" type="button">Seleccionar</button></li>

                  </ul>
                </div>
              </div>

            </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Especialidad </h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>

    <div class="row setup-content" id="step-4">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Médico </h3>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
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
