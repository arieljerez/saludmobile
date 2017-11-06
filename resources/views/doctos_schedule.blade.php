@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                  <h2>Horarios
                      <span class="label label-success" style="float:right;margin-right:3px">
                          <span class="fa fa-globe text-success" aria-hidden="true"></span>
                          0
                      </span>
                  </h2>

                </div>

                <div class="panel-body">

                  <div class="panel-group" id="accordion">
                                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#col0" aria-expanded="false">
                                  <span class="fa fa-plus-circle" style="margin-right:3px"></span> lunes
                              </a>
                          </h4>
                      </div>

                      <div id="col0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                              <ul class="list-group">
                                          <li class="list-group-item" style="background-color:#dddddd">
                                              15:00 20:15 -
                                              <span class="label label-success" style="float:right;margin-right:3px">www</span>
                                              <span class="label label-danger" style="float:right;margin-right:3px">ST 3</span>
                                          </li>
                                              <li class="list-group-item">
                                                  <span class="fa fa-calendar" aria-hidden="true" style=" margin-right:3px"></span>
                                                  30/08/2015 - 01/01/2100
                                              </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#col1" aria-expanded="true">
                                  <span class="fa fa-minus-circle" style="margin-right:3px"></span> miércoles
                              </a>
                          </h4>
                      </div>

                      <div id="col1" class="panel-collapse collapse in" aria-expanded="true" style="">
                          <div class="panel-body">
                              <ul class="list-group">
                                          <li class="list-group-item" style="background-color:#dddddd">
                                              15:00 20:00 -
                                              <span class="label label-success" style="float:right;margin-right:3px">www</span>
                                              <span class="label label-danger" style="float:right;margin-right:3px">ST 3</span>
                                          </li>
                                              <li class="list-group-item">
                                                  <span class="fa fa-calendar" aria-hidden="true" style=" margin-right:3px"></span>
                                                  30/08/2015 - 01/01/2100
                                              </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                      </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
