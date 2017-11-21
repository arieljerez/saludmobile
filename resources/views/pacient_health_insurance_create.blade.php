
@extends('layouts.app')

@section('content')

@section('content_title',__('Coberturas: Agregar'))


  <form class="form-class" method="post" action="{{route('pacient/healt_insurance/store')}}">

      <div class="form-group col-md-4 col-md-offset-1">
        <label class="control-label">{{ __('Cobertura') }}</label>
        <input name="insurance" maxlength="100" type="text" required="required" class="form-control" placeholder="Cobertura" value="{{ old('insurance') }}" />

        <label class="control-label">{{ __('Plan') }}</label>
        <input name="plan" maxlength="100" type="text" required="required" class="form-control" placeholder="Plan" value="{{ old('plan') }}" />
      </div>

      <div class="form-group col-md-4 col-md-offset-1">
        <label class="control-label">{{ __('Tipo Contratacion') }}</label>
        <input name="type_recruitment" maxlength="100" type="text" required="required" class="form-control" placeholder="Tipo Cobertura" value="{{ old('type_recruitment') }}"  />

        <label class="control-label">{{ __('Numero Afiliado') }}</label>
        <input name="affiliate_number" maxlength="100" type="number" required="required" class="form-control" placeholder="Número Afiliado" value="{{ old('affiliate_number') }}"  />
      </div>

      <div class="row col-md-8 col-md-offset-1 pull-right">
        <a href="{{ route('pacient.healt_insurance.list')}}" class="btn btn-primary" type="button">
          <span class="fa fa-times"></span> {{__('Cancelar')}}
        </a>
        <button class="btn btn-primary" type="submit">
          <span class="fa fa-plus"></span> {{__('Aceptar')}}
        </button>
        {{ csrf_field()}}
      </div>

  </form>

 @endsection
