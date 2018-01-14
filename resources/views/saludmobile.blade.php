<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <style>
            html, body {
                  background-color: #E2E2E0;
                  margin-top: 10px;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
</head>
<body>
<div class="container">

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      @if (isset($error))
        <div class="alert alert-danger" role="alert">
          {{$error}}
        </div>
      @endif
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 flex-center">
      <img src="{{ asset('logo-inicio.png') }}" width="200">
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @include('auth.login_remote_form')
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 flex-center">
      <div class="links">
        <a href="{{ asset('SaludMobile.apk') }}">Bajar App Android</a>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>

</div>
</body>
</html>
