
@extends('layouts.app')

@section('content')
<div class="content">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" >
    <div class="panel panel-default col-md-8">
      <div class="panel-heading" role="tab" id="headingOne">
        <h5 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fa fa-credit-card fa-2x" aria-hidden="true" style="margin-right:3px"></i>
            Swiss Medical (SMG)
          </a>
        </h5>
      </div>

      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="form-group col-md-4">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
