<form class="form-signin" method="post" action="/remotelogin">
  <h2 class="form-signin-heading" align="centre"> </h2>
  <label for="user" class="sr-only">Usuario</label>
  <input type="text" name="user" id="user" class="form-control" placeholder="Usuario" required autofocus>
  <label for="password" class="sr-only">Contraseña</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
  {{ csrf_field() }}
  </br>
  <div class="checkbox">
    <label>
      <input type="checkbox" value="remember-me"> Recordarme
    </label>
  </div>
  </br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
</form>
