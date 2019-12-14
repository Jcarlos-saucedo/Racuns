<?php 
  $conectar = new PDO("sqlite:prueba.db");
  $sql_datos= "SELECT * FROM info_usuarios";
  $sql_direcciones= "SELECT * FROM direcciones";
  $query_datos= $conectar->prepare($sql_datos);
  $query_direccion= $conectar->prepare($sql_direcciones);
  $query_datos->execute();
  $query_direccion->execute();


?>
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
    <title>Gestionar Clientes</title>
  </head>
  <body class="fondo hero is-fullheight">
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

      <div class="container pruebadiv1 column is-offset-1">
        <div class="column is-12">
          <br>
          <br>
          <h1 class="title is-3">Gestion de Clientes</h1>
          <div>
            <p>La gestión del cliente permite modificar, eliminar y crar el perfil de los consumidores y, en consecuencia, profundizar el conocimiento de los mismos al punto que se les pueda atender en forma segmentada e incluso personalizada</p>
          </div>
          <div class="left column is-12">
            <table>
              <tr>
                <td class="tabla2 column"><strong style="color:white;">Nombre</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Apellido</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Fecha</strong></td>
                <td class="tabla2 column"><strong style="color:white;">CURP</strong></td>
                <td class="tabla2 column"><strong style="color:white;">RFC</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Postal</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Calle</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Numero</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Colonia</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Ciudad</strong></td>
                <td class="tabla2 column"><strong style="color:white;">Estado</strong></td>
                <td><a href="/agregar_cliente"><button type="submit" class="boton_new column is-offset-1 is-11"><strong class="" style="color:white;">Agregar</strong></button></a></td>
              </tr>

              <?php while($datos=$query_datos->fetch() and $direccion=$query_direccion->fetch()){
                echo "<tr>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['Nombre']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['Apellidos']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['Nacimiento']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['CURP']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['RFC']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $datos['CodigoPostal']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $direccion['Calle']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $direccion['Numero']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $direccion['Colonia']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $direccion['Ciudad']; echo "</td>";
                echo "<td class='tabla column' style='color:black;'>" ; echo $direccion['Estado']; echo "</td>";
                echo "<td><a href='/modificar_cliente?no=".$datos['ID_u']."'><button type='button' class='boton_modif column is-offset-1 is-11'><strong class='' style='color:white;'>Modificar</strong></button></a></td>";
                echo "<td><a href='/eliminar_cliente?no=".$datos['ID_u']."'><button type='button' class='boton_delete column is-offset-1 is-11'><strong class='' style='color:white;''>Eliminar</strong></button></a></td>";
                echo "</tr>";
                }
                ?>

            </table>
          </div>
        </div>

      </div>
    </div>
    <script src="js/drop-menu.js"></script>
  </body>
</html>