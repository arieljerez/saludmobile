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
              <div class="panel-group" id="accordion_especialidad_fecha1">
              <div class="panel panel-default">
        @foreach ($fechas as $fecha)

          @php
            $label = $loop->index > 0 ?  "success": "danger";
            $index = $loop->index;
          @endphp


                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_especialidad_fecha1" href="#fecha_collapse{{$loop->index}}">
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
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White
                          <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White
                          <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White
                          <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                      </div>
                    @endif

                </div>

          @endforeach
        </div>
              </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_especialidad" href="#especialidad_obstetricia_collapse1"><span class="fa fa-hospital-o fa-2x"></span> Obstetricia</a>
      </h4>
    </div>
    <div id="especialidad_obstetricia_collapse1" class="panel-collapse collapse">
      <div class="panel-group" id="accordion_obstetricia_fecha1">
        <div class="panel panel-default">
        @php
          $fechas = array('Lunes','Martes','Miercoles','Jueves','Viernes');
        @endphp

        @foreach ($fechas as $fecha)

          @php
            $label = $loop->index > 0 ?  "success": "danger";
            $index = $loop->index;
          @endphp

                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion_obstetricia_fecha1"href="#Obstetricia_fecha_collapse{{$loop->index}}">
                      <span aria-hidden="true" class="fa fa-calendar" style="margin-right: 3px;"></span>
                      2{{$loop->index}}/11/2017 {{$fecha}}</a>
                    @if ($index == 0)
                    <span class="label label-{{$label}}" style="float: right; margin-right: 3px;">{{$loop->index}}</span>
                    @else
                    <span class="label label-{{$label}}" style="float: right; margin-right: 3px;">3</span>
                    @endif
                  </h4>
                </div>
                <div id="Obstetricia_fecha_collapse{{$loop->index}}" class="panel-collapse collapse">
                    @if ($index == 0)
                    <div class="list-group" style="background-color: ligthgrey">
                      <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White </li>
                      <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White </li>
                      <li class="list-group-item" disabled><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White </li>
                    </div>
                    @elseif($index > 0)
                      <div class="list-group" style="background-color: ligthgrey">
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00  <span class="fa fa-user-md"></span> Carlota White
                            <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 <span class="fa fa-user-md"></span> Carlota White
                          <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                        <a href="#" class="list-group-item nextBtn"><i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 <span class="fa fa-user-md"></span> Carlota White
                          <span class="btn btn-success btn-sm nextBtn pull-right" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-save" aria-hidden="true"></i> </span>
                        </a>
                      </div>
                    @endif

                </div>

          @endforeach
        </div>
      </div>

    </div>
  </div>
</div>
