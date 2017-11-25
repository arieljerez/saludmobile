@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
  <form class="" action="index.html" method="post">
    <div class="panel panel-default panel-info">
    <div class="panel-heading">Registrarme</div>

    <div class="panel-body">
    <div class="row">
      <div class="col-md-4">
        <img src="/avatars/female-silhouette_7.jpg" alt="..." class="img-thumbnail">
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="form-group col-md-12">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" required>
          </div>
          <div class="form-group col-md-12">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
          </div>
        </div>

      </div>

    </div>

    <div class="row">
      <div class="form-group col-md-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" class="form-control" placeholder="DNI" name="dni" id="dni" required>
      </div>
      <div class="form-group col-md-6">
        <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
        <input type="text" class="form-control" placeholder="Fecha Nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
      </div>
      <div class="form-group col-md-3">
        <label for="fecha_nacimiento" class="form-label">Sexo</label>
        <input type="text" class="form-control" placeholder="Fecha Nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
            <label for="mail" class="form-label">Correo Electrónico</label>
            <input type="text" class="form-control" placeholder="Correo Electrónico" name="mail" id="mail" required>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="telefono_1" class="form-label">Teléfono 1</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Teléfono 1" name="telefono_1" id="telefono_1" required>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Teléfono 1" name="telefono_1" id="telefono_1" required>
              </div>
            </div>

          </div>
          <div class="form-group">
            <label for="telefono_2" class="form-label">Teléfono 2</label>
            <input type="text" class="form-control" placeholder="Teléfono 2" name="telefono_2" id="telefono_2" required>
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
            <label for="cobertura" class="form-label">Cobertura</label>
            <input type="text" class="form-control" placeholder="Cobertura" name="cobertura" id="cobertura" required>
          </div>
          <div class="form-group">
            <label for="plan" class="form-label">Plan</label>
            <input type="text" class="form-control" placeholder="Plan" name="plan" id="plan" required>
          </div>
          <div class="form-group">
            <label for="numero_afiliado" class="form-label">Número Afiliado</label>
            <input type="number" class="form-control" placeholder="Número Afiliado" name="numero_afiliado" id="numero_afiliado" required>
          </div>

      </div>
    </div>

    </div>
      <div class="panel-footer">
        <a href="#" class="btn btn-success">Registrarme</a>
        <a href="{{route('inicio')}}" class="btn btn-primary">Cancelar</a>
      </div>
  </div>
  </form>
</div>
@endsection

@section('js')
<script type="text/javascript">

  (function () {
      var takePicture = document.querySelector("#take-picture"),
          showPicture = document.querySelector("#show-picture"),
          data        = $("#data");

      if (takePicture && showPicture) {
          // Set events
          takePicture.onchange = function (event) {
              // Get a reference to the taken picture or chosen file
              var files = event.target.files,
                  file;
              if (files && files.length > 0) {
                  file = files[0];
                  try {
                      // Get window.URL object
                      var URL = window.URL || window.webkitURL;

                      // Create ObjectURL
                      var imgURL = URL.createObjectURL(file);

                    	window.text = file;
                 		data.text(file);

                      // Set img src to ObjectURL
                      showPicture.src = imgURL;
                    	$(showPicture).show();

                      // Revoke ObjectURL
                      //URL.revokeObjectURL(imgURL);
                  }
                  catch (e) {
                      try {
                          // Fallback if createObjectURL is not supported
                          var fileReader = new FileReader();
                          fileReader.onload = function (event) {
                              showPicture.src = event.target.result;
                          };
                          fileReader.readAsDataURL(file);
                      }
                      catch (e) {
                          // Display error message
                          var error = document.querySelector("#error");
                          if (error) {
                              error.innerHTML = "Neither createObjectURL or FileReader are supported";
                          }
                      }
                  }
              }
          };
      }
  })();
</script>
@endsection
