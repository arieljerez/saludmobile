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
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12 col-md-8">
        <div class="col-md-12">
          <h3> Especialidad / Medico</h3>
          <div class="form-group">
            <label class="control-label">Company Name</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Company Address</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
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
