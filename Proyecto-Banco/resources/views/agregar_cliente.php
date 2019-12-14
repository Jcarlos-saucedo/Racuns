<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_calculo_prestamos.css">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible", content="ie-edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/JC_estilo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <title>Agregar Cliente</title>
  </head>
  <body class="fondo hero is-fullheight">
    <div>
      <section>
      
    <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009c;">
      <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
      <div class="navbar-end ">
        <div class="navbar-item" >
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></form>
        </div>
        
       
        
        
        
        <div class="navbar-item dropdown is-white dropdown" id="cursor"><span class="navbar-item has-text-weight-bold" style="color:#E3B53B;">Menú</span><span class="icon is-small"><i class="fas fa-bars" style="color:#E3B53B;"></i></span>
          <div class="navbar-dropdown" style="margin-left:-110px;">
            <div class="container">
              <div class="columns" style="background-color:#D7D7D7; font-weight: normal; font-size: 14px; ">
                  <div class="column">
                    <a class="navbar-item" href="/gestionar-clientes">
                      <div class="navbar-content">
                        <p>
                          <small>Gestionar cuentas</small>
                        </p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/calcular-prestamos">
                      <div class="navbar-content">
                        <p>
                          <small>Calcular prestamos</small>
                        </p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/I_VerificarBuro">
                      <div class="navbar-content">
                        <p><small>Verificar buró de credito</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/I_GenerarReporte">
                      <div class="navbar-content">
                        <p><small>Generar reportes de prestamos</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/asignar_prestamo">
                      <div class="navbar-content">
                        <p><small>Asignar prestamos</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href="/Tarjetas">
                      <div class="navbar-content">
                        <p><small>Asignar tarjetas de debito y credito</small></p>
                      </div>
                    </a>
                    <a class="navbar-item" href=/Cobranza>
                      <div class="navbar-content">
                        <p><small>Gestionar area de cobranza</small></p>
                      </div>
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
      </div>
      <div class="container pruebadiv1 columns column is-offset-1">
        <div class="column is-12">
          <br>
          <br>
          <br>
          <h1 class="title is-3">Agregar Cliente</h1>

          <div class="left column is-offset-1 is-5">
            <form action="/agregar_datos_cliente" method="POST">

              <label class=""><strong style="color:white;">Nombre:</strong></label>
              <input type="text" name="nom">
              <br>
              <label class=""><strong style="color:white;">Apellidos:</strong></label>
              <input type="text" name="apel">
              <br>
              <label class=""><strong style="color:white;">Fecha de Nacimiento:</strong></label>
              <input type="text" name="date">
              <br>
              <label class=""><strong style="color:white;">CURP:</strong></label>
              <input type="text" name="curp">
              <br>
              <label class=""><strong style="color:white;">RFC:</strong></label>
              <br>
              <input type="text" name="rfc">
              <br>
              <label class=""><strong style="color:white;">Codigo Postal:</strong></label>
              <input type="text" name="cpost">
              <br>
              <label class=""><strong style="color:white;">Calle:</strong></label>
              <input type="text" name="call">
              <br>
              <label class=""><strong style="color:white;">Numero de Domicilio:</strong></label>
              <input type="text" name="domic">
              <br>
              <label class=""><strong style="color:white;">Colonia:</strong></label>
              <input type="text" name="col">
              <br>
              <label class=""><strong style="color:white;">Ciudad:</strong></label>
              <input type="text" name="city">
              <br>
              <label class=""><strong style="color:white;">Estado:</strong></label>
              <input type="text" name="est">
              <br>
              <br>
              <button type="submit" class="boton column is-12"><strong class="title is-4" style="color:white;">Guardar</strong></button>
              <br>
            </form>
              <a href="/gestionar-clientes"><button type="submit" class="boton column is-12"><strong class="title is-4" style="color:white;">Cancelar</strong></button></a>
          </div>
          <div class="column is-offset-1 is-5 imagen left">
            <br>
            <img src="imagenes/PHP/seleccion2.png">
          </div>
                
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="column is-12 left">
        <a href="" class="pie" style="color:white;">@2019 Racuns.Inc |</a>
        <a href="" class="pie" style="color:white;"> Terminos de uso |</a>
        <a href="" class="pie" style="color:white;">Inicio |</a>  
        <a href="" class="pie" style="color:white;">Atención a cliente</a>                   
      </div>            
    </div>
    <script src="js/drop-menu.js"></script>
  </body>
</html>