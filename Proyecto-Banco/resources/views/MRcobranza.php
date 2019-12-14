
<MRcobranza class="php"></MRcobranza>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-sacle=1.0, user-scalabe=no, maximun-scale=1.0, minimun-scale=1.0"/>
    <meta http-equiv="X-UA-Comátible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/css/MRestilos.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-iconpicker/dist/bulma-iconpicker.min.js"></script>
    <script src="js/javascripts.js"></script>
    <script src="js/jquery.slides.js"></script>
    <script src="js/drop-menu.js"></script>
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
                    <a class="navbar-item" href="#">
                      <div class="navbar-content">
                        <p>
                          <small>Calcular prestamos</small></p>
                      </div></a><a class="navbar-item" href="#">
                      <div class="navbar-content">
                        <p><small>Verificar buró de credito</small></p>
                      </div></a><a class="navbar-item" href="#">
                      <div class="navbar-content">
                        <p><small>Generar reportes de prestamos</small></p>
                      </div></a><a class="navbar-item" href="#">
                      <div class="navbar-content">
                        <p><small>Asignar prestamos</small></p>
                      </div></a><a class="navbar-item" href="/Tarjetas">
                      <div class="navbar-content">
                        <p><small>Asignar tarjetas de debito y credito</small></p>
                      </div></a><a class="navbar-item" href="/Cobranza">
                      <div class="navbar-content">
                        <p><small>Gestionar area de cobranza</small></p>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="consulta" class="container is-fullwidth">
        <br>
        <center>
          <p style="color:blue; font-size:25px">Deudores</p>
          <br>
          <div class="table-container has-text-centered">
            <table class="table is-fullwidth has-text-centered">
              <tr>
                <td style="font-size:25px">Id</td>
                <td style="font-size:25px">Nombres</td>
                <td style="font-size:25px">Apellido Paterno</td>
                <td style="font-size:25px">Apellido Materno</td>
                <td style="font-size:25px">Fecha Vencimiento</td>
                <td style="font-size:25px">Deuda</td>
              </tr>
              <?php
              include("abrir_conexion.php");
              $sql="SELECT * FROM $tabla_db3";
              $result = mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_array($result) or die ("") ){
              ?>
              <tr>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['apellido_paterno']?></td>
                <td><?php echo $mostrar['apellido_materno']?></td>
                <td><?php echo $mostrar['fecha_vencimiento']?></td>
                <td><?php echo $mostrar['deuda']?></td>
              </tr>
            <?php }
            include("cerrar_conexion.php");
            ?>
            </table>
          </div>
        </center>
      </div>
      <div id="seccion" class="container is-fullhd">
        <div id="seccion" class="container is-fullhd">
          <section class="hero is-medium fondoaz">
            <div class="diez"><a href="/"><img src="../../public/imagenes/hstw4.png" style="margin-left:5%;width:150px;height:50px;"></a>
              <div class="topo"><a class="izquis has-text-weight-bold cazul sombra">Aviso legal</a><a class="izqui has-text-weight-bold cazul sombra">Mapa del sitio</a><a class="izqui has-text-weight-bold cazul sombra">Aviso de privacidad</a></div>
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
              <div style="margin-top:50px; margin-left:995px;"><a class="cazul has-text-weight-bold sombra">Consulta los costos y las comisiones de nuestros productos</a>
                <div class="veintes" style="margin-left:110px;"><a class=" cazul has-text-weight-bold sombra">Creando Oportunidades</a></div>
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
