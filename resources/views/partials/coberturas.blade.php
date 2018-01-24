@foreach ($paciente->coberturas as $cobertura)
<div class="card-block">
  @php
    $i = $cobertura->Descripcion."-".$loop->index;
  @endphp

  <div class="panel-heading" role="tab" id="heading-{{ $i }}">
    <h5 class="panel-title">
      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $i }}" aria-expanded="false" aria-controls="collapse-{{ $i }}">
        <i class="fa fa-credit-card fa-2x" aria-hidden="true" style="margin-right:3px"></i>
        {{$cobertura->Descripcion}}  <i class="fa fa-angle-down fa-1x" aria-hidden="true"></i>

        {{$nextButton}}
        <!-- <span class="btn btn-success btn-sm nextBtn pull-right" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i> </span> -->
      </a>
    </h5>
  </div>

  <div id="collapse-{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $i }}">
    <div class="panel-body">
      <div class="form-group col-md-6">
        <label class="control-label">{{ __('Cobertura') }}</label>
        <input readonly="true" name="cobertura" maxlength="100" type="text" required="required" class="form-control" placeholder="Cobertura" value="{{ $cobertura->Descripcion }}" />
        <label class="control-label">{{ __('Plan') }}</label>
        <input readonly="true" name="plan" maxlength="100" type="text" required="required" class="form-control" placeholder="Plan" value="{{  $cobertura->PlanDescripcion }}" />
      </div>
      <div class="form-group col-md-6">
        <label class="control-label">{{ __('Tipo Contratacion') }}</label>
        <input readonly="true" name="type_recruitment" maxlength="100" type="text" required="required" class="form-control" placeholder="Cobertura" value="{{ $cobertura->TipoContratacionDescripcion }}"  />
        <label class="control-label">{{ __('Numero Afiliado') }}</label>
        <input readonly="true" name="affiliate_number" maxlength="100" type="number" required="required" class="form-control" placeholder="Número Afiliado" value="{{ $cobertura->NumeroAfiliado }}"  />
      </div>
    </div>
  </div>

@endforeach
