<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible", content="ie-edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/JC_estilo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>HSTW Banco | Iniciar sesion</title>
</head>

   
<body class="">
    <section class="">
        <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009c;">
          <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
          <div class="navbar-end ">
            <div class="navbar-item" >
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
            </div>
            
            <div class="navbar-item" >
              <div class="has-text-weight-bold" style="background-color:#E3B53B; border-color:#E3B53B; color:black;">
                @auth
                  {{ auth()->user()->nombre }}
                @endauth
              </div>
            </div>
            
            <div class="navbar-item">
                <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/crear-cuenta" style="color:white;">Hazte cliente</a></div>
            </div>
          </div>
        </div>
      </section>
    <div class="hero is-fullheight fondolog">
        <div class="container ">
            <div class="row">
                <div class="col-md-5 col-md-offset-2" style="margin-left: 25%; margin-top: 10%;" >
                    <div class="panel panel-default" style="height: 350px; background-color: #0000009c;">
                        <div class="panel-heading has-text-centered" style="background-color: #F9D632;">Iniciar sesion</div>

                        <div class="panel-body" style="margin-left: 100px; margin-top: 50px;">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                    <label for="nombre" class=" control-label" style="color:white;">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" style="width: 200px;" required autofocus>

                                        @if ($errors->has('nombre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class=" control-label" style="color:white;">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" style="width: 200px;" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="" style="margin-left: 60px; width:350px;">
                                        <button type="submit" class="btn btn-warning">
                                            Continuar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
