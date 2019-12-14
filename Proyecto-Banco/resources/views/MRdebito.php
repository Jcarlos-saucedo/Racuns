
<MRdebito class="php"></MRdebito>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-sacle=1.0, user-scalabe=no, maximun-scale=1.0, minimun-scale=1.0"/>
    <meta http-equiv="X-UA-Comátible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/MRestilos.css"/>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-iconpicker/dist/bulma-iconpicker.min.js"></script>
    <script src="js/javascripts.js"></script>
    <script src="js/drop-menu.js"></script>
    <script src="js/jquery.slides.js"></script>
    <body class="has-navbar-fixed-top">
      <div class="navbar is-fixed-top navbar-end" style="background-color: #0000009c;">
        <div class="navbar-brand"><a href="/"><img src="imagenes/hstw4.png" style="margin-top:5px;margin-left:50%;width:150px;height:50px;"></a></div>
        <div class="navbar-end ">
          <div class="navbar-item">
            <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/Credito" style="color:white;">Credito</a></div>
          </div>
          <div class="navbar-item">
            <div class="button" style="background-color:#E3B53B;border-color:#E3B53B;"><a class="has-text-weight-bold" href="/Debito" style="color:white;">Debito</a></div>
          </div>
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
      <div class="container is-fullhd"><img src="imagenes/debito2.jpg" id="women"/></div>
      <div id="txt" class="container is-fullhd">
        <p style="font-size:50px; font-family:Garamond">Siente la libertad de realizar,<br> lo que en verdad quieres.</p>
      </div>
      <div id="columnas" class="columns">
        <div id="mycont" class="container is-fluid"><br/>
          <form action="/Debito" method="post" name="form3">
            <hr><span class="tag is-black">Numero de Tarjeta</span>
            <div class="control">
              <input type="text" name="tarjeta" placeholder="Escribe el numero de la tarjeta" class="input"/>
            </div><br/><span class="tag is-black">Fecha de Vencimiento</span>
            <div class="control">
              <input type="text" name="fecha" placeholder="MM/AA" class="input"/>
            </div><br/><span class="tag is-black">Tipo de Tarjeta</span>
            <div class="control">
              <div class="select">
                <select name="tipo">
                  <option>Elige la tarjeta</option>
                  <option value="MasterCard">Master Card</option>
                  <option value="Visa">Visa</option>
                  <option value="AmericanExpress">American Express</option>
                  <option value="CareCredit">CareCredit</option>
                </select>
              </div>
            </div><br/>
            <button id="otrobtn" name="bton3" class="button">VERIFICAR</button>
          </form>
          <?php
            if(isset($_POST['tarjeta'])){
              include("abrir_conexion.php");
              $tarjeta = $_POST['tarjeta'];
              $fecha = $_POST["fecha"];
              $tipo = $_POST["tipo"];
              $insertar = "INSERT INTO $tabla_db2 (numero_tarjeta, fecha_vencimiento, tipo_tarjeta) VALUES ('$tarjeta','$fecha','$tipo')";
              $verificar_datos3 = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE numero_tarjeta = '$tarjeta'");
              if(mysqli_num_rows($verificar_datos3)>0){
                echo '<script> alert("El número ya está registrado")</script>';
                exit;
              }
              $resultado3 = mysqli_query($conexion,$insertar);
              include("cerrar_conexion.php");
            }
          ?>

        </div>
        <div id="tarjet" class="column">
          <p style="color:white; font-size:20px">Estas a un paso de conseguir</p>
          <p style="color:white; font-size:20px">todos los beneficios</p>
          <p style="color:gold; font-size:40px">HSTW</p><img src="imagenes/pareja.jpg" id="morra"/>
        </div>
      </div>
      <div id="seccion" class="container is-fullhd">
            <section class="hero is-medium">
              <div class="diez"><a href="/"><img src="imagenes/hstw4.png" style="margin-left:5%;width:150px;height:50px;"></a>
                <div class="topo"><a class="izquis has-text-weight-bold sombra">Aviso legal</a><a class="izqui has-text-weight-bold sombra">Mapa del sitio</a><a class="izqui has-text-weight-bold sombra">Aviso de privacidad</a></div>
                <p class="izquis topos mini">© 2019 HSTW Banco, S. A., Institución de Banca Múltiple, Grupo Financiero HSTW Banco, Avenida Paseo de la UTT 510, colonia centro,</p>
                <p class="izquis sopot mini"> código postal 06600, Torreon , Coahuila.</p>
              </div>
              <div class="diez is-overlay">
                <div style="display:flex;margin-left:1100px;">
                  <div class="circulin"><a class="espacito"><i class="fab fa-facebook-f" style="color:#D8C021;"></i></a></div>
                  <div class="circulin"><a class="espacito"><i class="fab fa-twitter" style="color:#D8C021;"></i></a></div>
                  <div class="circulin"><a class="espacito"><i class="fab fa-linkedin-in" style="color:#D8C021;"></i></a></div>
                  <div class="circulin"><a class="espacito"><i class="fab fa-instagram" style="color:#D8C021;"></i></a></div>
                  <div class="circulin"><a class="espacitos"><i class="fab fa-youtube" style="color:#D8C021;"></i></a></div>
                </div>
                <div style="margin-top:50px; margin-left:995px;"><a class=" has-text-weight-bold sombra">Consulta los costos y las comisiones de nuestros productos</a>
                  <div class="veintes" style="margin-left:110px;"><a class=" has-text-weight-bold sombra">Creando Oportunidades</a></div>
                </div>
              </div>
            </section><script src="https://unpkg.com/vue/dist/vue.js"></script>
            <script src="js/main.js"></script>
            <script src="js/drop-menu.js"></script>
          </div>
        </div>
      </div>
    </body>
  </head>
</html>
