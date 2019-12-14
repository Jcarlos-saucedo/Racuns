
<MRcredito class="php"></MRcredito>
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
    <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-iconpicker/dist/bulma-iconpicker.min.js"></script><script src="https://unpkg.com/vue/dist/vue.js"></script>
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
      <div class="container is-fullhd"><img src="imagenes/credito.jpg" id="money"/></div>
      <div id="txt" class="container is-fullhd">
        <p style="font-size:50px; font-family:Garamond">Organizate, <br> y expande tu negocio.</p>
      </div>
      <div id="columnas" class="columns">
        <div id="form" class="column">
          <button id="boton1" onclick="ShowHideElement()" class="button button is-medium">RFC</button>
          <button id="boton2" onclick="ShowHideElement1()" class="button button is-medium">NOMBRES</button><br/>
          <hr/>
          <form action="/Credito" method="post" name="form">
            <div id="mycont" class="container is-fluid"><span class="tag is-black">Numero de Cliente</span>
              <div class="control">
                <input type="text" name="nume" placeholder="8 digitos" class="input"/>
              </div><br/><span class="tag is-black">RFC</span>
              <div class="control">
                <input type="text" name="rfc" placeholder="Escribe el RFC" class="input"/>
              </div><br/><span class="tag is-black">CURP</span>
              <div class="control">
                <input type="text" name="curp" placeholder="Escribe la CURP" class="input"/>
              </div><br/>
              <button id="otrobtn" name="bton1" class="button">VERIFICAR</button>
            </div>
          </form>
          <?php
            include("abrir_conexion.php");
            if(isset($_POST['curp'])||isset($_POST['rfc'])){
              $rfc = $_POST["rfc"];
              $curp = $_POST["curp"];

              $verificar_curp = mysqli_query($conexion,"SELECT buro FROM $tabla_db3 WHERE curp='$curp'");
              $verificar_rfc = mysqli_query($conexion,"SELECT buro FROM $tabla_db3 WHERE rfc='$rfc'");

              $mostrar2=mysqli_fetch_array($verificar_rfc);
              $mostrar1=mysqli_fetch_array($verificar_curp);

              while($mostrar1 || $mostrar2){
                if($mostrar1['buro']=="si"){
                  echo '<script> alert("Lo sentimos hay un buró de credito registrado con este CURP")</script>';
                  exit;
                }elseif($mostrar2['buro']=="si"){
                  echo '<script> alert("Lo sentimos hay un buró de credito registrado con este RFC")</script>';
                  exit;
                }
                else{
                  echo '<script> alert("Si jalo")</script>';
                  exit;
                }
              }
            }
              include("cerrar_conexion.php");
          ?>
          <form action="/Credito" method="post" name="form2">
            <div id="mycont2" class="container is-fluid"><span class="tag is-black">Nombre(s)</span>
              <div class="control">
                <input type="text" name="nomb" placeholder="Escribe el Nombre(s)" class="input"/>
              </div><br/><span class="tag is-black">Apellido Paterno</span>
              <div class="control">
                <input type="text" name="ap" placeholder="Escribe el Apellido Paterno" class="input"/>
              </div><br/><span class="tag is-black">Apellido Materno</span>
              <div class="control">
                <input type="text" name="am" placeholder="Escribe el Apellido Materno" class="input"/>
              </div><br/><span class="tag is-black">Fecha de Nacimiento</span>
              <div class="control">
                <input type="text" placeholder="DD" id="fech" class="input"/>
                <input type="text" placeholder="MM" id="fech" class="input"/>
                <input type="text" placeholder="AAAA" id="fech" class="input"/>
              </div><br/>
              <button id="otrobtn" name="bton2" class="button">VERIFICAR</button>
            </div><br/>
          </form>
          <?php
          include("abrir_conexion.php");
            if(isset($_POST['nomb'])||isset($_POST['ap'])||isset($_POST['am'])){
              $nombre = $_POST["nomb"];
              $ap = $_POST["ap"];
              $am = $_POST["am"];

              $verificar_nomb = mysqli_query($conexion,"SELECT buro FROM $tabla_db3 WHERE nombre='$nombre'");
              $verificar_ap = mysqli_query($conexion,"SELECT buro FROM $tabla_db3 WHERE apellido_paterno='$ap'");
              $verificar_am = mysqli_query($conexion,"SELECT buro FROM $tabla_db3 WHERE apellido_materno='$am'");

              $mostrar3=mysqli_fetch_array($verificar_nomb);
              $mostrar4=mysqli_fetch_array($verificar_ap);
              $mostrar5=mysqli_fetch_array($verificar_am);

              while($mostrar3 || $mostrar4 || $mostrar5){
                if($mostrar3['buro']=="si"){
                  echo '<script> alert("Lo sentimos hay un buró de credito registrado con este Nombre")</script>';
                  exit;
                }elseif($mostrar4['buro']=="si"){
                  echo '<script> alert("Lo sentimos hay un buró de credito registrado con este Apellido P")</script>';
                  exit;
                }
                elseif($mostrar5['buro']=="si"){
                  echo '<script> alert("Lo sentimos hay un buró de credito registrado con este Apellido M")</script>';
                  exit;
                }
                else{
                  echo '<script> alert("Si jalo")</script>';
                  exit;
                }
              }
            }
            include("cerrar_conexion.php");
            ?>

        </div>
        <div id="tarjet" class="column">
          <p style="font-size:20px; color:white">Compara todas las </p>
          <p style="font-size:40px; color:gold">Tarjetas de Crédito en México </p>
          <p style="font-size:20px; color:white">y elige la mejor para ti.</p><img src="imagenes/tarjetas.png"/>
        </div>
      </div>
      <div id="seccion" class="container is-fullhd">
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
    </body>
  </head>
</html>
