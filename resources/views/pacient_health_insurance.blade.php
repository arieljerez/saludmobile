
@extends('layouts.app')

@section('content')

@section('content_title',__('Coberturas'))

  <div class="row col-md-8">
    <form class="form-class" action="{{route('pacient/healt_insurance/create')}}" method="get">
      <button class="btn btn-success pull-right" type="submit">
        <span class="fa fa-plus"></span> {{__('Agregar')}}
      </button>
    </form>
  </div>

  <div class="row col-md-8"> &nbsp; </div>

  <div class="panel-group col-sm-12 col-md-8" id="accordion" role="tablist" aria-multiselectable="true" >

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
 @endsection
