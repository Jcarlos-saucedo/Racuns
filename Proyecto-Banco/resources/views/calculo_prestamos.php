<?php
  $conectar= new PDO("sqlite:prueba.db");
  $con_nombre="select * from info_usuarios";
  $query_usuario= $conectar->prepare($con_nombre);
  $query_usuario->execute();
  $persona= $query_usuario->fetch();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="css/css_calculo_prestamos.css">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible", content="ie-edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/JC_estilo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" width="28" height="28"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <title>Calcular Prestamos</title>
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
    
      <div class="container">
        
      </div>
      <div class="container pruebadiv1 columns column is-offset-1">
        <div class="column is-12">
          <br>
          <br>
          <br>
          <h1 class="title is-3">Calcular Prestamo</h1>

          <div class="left">
            <form action="/pdf" method="POST">
              <p class="title is-6"><strong style="color:white;">Cantidad del prestamo:</strong></p>
              

              <input type="text" name="prestamo" placeholder="$ 000.00">
          
              <p class="title is-6"><strong style="color:white;">Años a pagar:</strong></p>
              <input type="text" name="tiempo" placeholder="1,2,3 Años...">

              <p class="title is-6"><strong style="color:white;">Fecha de Inicio:</strong></p>
              <input type="text" name="periodo" placeholder="00-00-00">

              <p class="title is-5"><strong style="color:white;">Nombre y Apellidos:</strong></p>
              <input type="text" name="usuario" value="<?php echo $persona['Nombre'] ?>">
              <br>
              <input type="text" name="apellidos" value="<?php echo $persona['Apellidos'] ?>">
              <br>
              <br>
              <br>
              <button type="submit" class="btn btn-succes boton"><strong class="title is-4" style="color:white;">Generar PDF</strong></button>
            </form>
          </div>
          <div class="left2 column is-6">
            <p>
              <strong>
                Cantidad de prestamo: 
              </strong>
              <p style="color:white;">
                En este apartado ingrese la cantidad del prestamo que ocupa, teniendo en consideracion de que nuestra empresa utiliza un interez del 8%.
              </p>
              <strong>
                Años a pagar: 
              </strong>
              <p style="color:white;">
                Ingrese la cantidad de años en los cuales planea pagar el prestamo previamente ingresado, nuestro sistema maneja los pagos de manera "Mensual" para ser mas accesible a todas las personas.
              </p>
              <strong>
                Fecha de inicio: 
              </strong>
              <p style="color:white;">
                Desde que fecha desea establecer el comienzo de los pagos, no es posible establecer el año por ovias razones.
              </p>
            </p>
          </div>
          <div class="left2 column is-3">
            <p>
              <img class="icon_money" src="imagenes/PHP/icon_money2.png">
            </p>
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