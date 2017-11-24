  </br>
  <form class="form-signin" method="post" action="{{'remotelogin'}}">
    <div class="form-group">
      <label for="dni" class="sr-only control-label">DNI:</label>
      <input type="number" name="dni" class="form-control" placeholder="DNI" required autofocus>
    </div>
    <div class="form-group">
      <label for="password" class="sr-only control-label">Contraseña:</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
    </div>
    <div class="form-group">
      <a href="{{ route('recuperar_acceso')}}" class="btn btn-sm text-muted btn-default">Olvidé mi contraseña</a>
    </div>
    <div class="form-group">
      <button class="btn btn-md btn-primary btn-block" type="submit">Ingresar</button>
      <a href="" class="btn btn-success btn-block" type="button">Registrarme</a>
    </div>
    {{ csrf_field() }}
  </form>
