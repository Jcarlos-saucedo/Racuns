<?php
	
    $host = "localhost";
    $basededatos = "hstw_banco";
    $usariodb = "root";
    $clavedb = "";

    $tabla_db1 = "users";



    $conexion = mysqli_connect($host,$usariodb,$clavedb,$basededatos);

    $sqlus= "select * from $tabla_db1 ";
    $consulta = mysqli_query($conexion,$sqlus);
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
    <title>Prestamo PDF</title>
  </head>
  <body class="bodypdf">
    <img class="imagepdf" src="imagenes/PHP/hstw.png">
    <?php
      $sqlus= "select * from $tabla_db1 ";
      $consulta = mysqli_query($conexion,$sqlus);
      $datos=$consulta->fetch_assoc();
      $años_totales=3;
      
    ?>
      <div class="container">
        <div class="pruebadiv3 leftpdf column is-offset-1 is-4">
          <p class="margen">Nombre de cliente: </p>
          <p class="margen"><?php echo $datos['nombre']; ?></p>
        </div>
        <div class="pruebadiv3 leftpdf column is-offset-1 is-4">
          <p class="margen">Tiempo estimado: 3 Años</p>
          <br>
          <p class="margen">Interes: 6%</p>
          <?php
             $monto_final= $datos['deuda']*((1+0.06)**$años_totales);
          ?>
          <p class="margen">Monto total a pagar: $<?php echo $monto_final?></p>
        </div>
        <div class="pruebadiv1pdf column is-offset-1 is-4">
          <p class="margen">Monto de prestamo:$ <?php echo $datos['deuda']?></p>
        </div>
      </div>
      <div>
        <div class="column is-offset-1 is-10">
          <?php
           $conexion = mysqli_connect($host,$usariodb,$clavedb,$basededatos);

            $sqlus= "select * from $tabla_db1 ";
            $consulta = mysqli_query($conexion,$sqlus);

            while ($datos=$consulta->fetch_assoc()){
            
            $mensual_anual=12;
            $cant_pagos=$años_totales*$mensual_anual;
            $cosa=1;
            $cantidad_pagar=$datos['deuda'];
                  
            
            echo "<table class='table tablapdf down'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th class='thpdf'>#pago</th>";
            echo "<th class='thpdf'>Cuota</th>";
            echo "<th class='thpdf'>Interes</th>";
            echo "<th class='thpdf'>Capital amortizado</th>";
            echo "<th class='thpdf'>Capital final</th>";
            echo "</tr>";
            echo "</thead>";
            echo "</table>";
            echo "<table class='table top'>";
            while($cosa){

              $interes=$cantidad_pagar*(0.08/12);

              echo "<tbody>";
              echo "<tr>";
              echo "<th class='thpdf'>".$cosa."</th>";
              echo "<th class='thpdf'>".(round($cantidad_pagar, 2))."</th>";
              echo "<th class='thpdf'>".(round($interes, 2))."</th>";

              $amortizacion=$cantidad_pagar*((0.06/(1-(1.06)**(-($cant_pagos)))));
              $amortizacion_final=$amortizacion-$interes;

              echo "<th class='thpdf'>".(round($amortizacion, 2))."</th>";

              $cantidad_pagar=$cantidad_pagar-$amortizacion_final;

              echo "<th class='thpdf'>".(round($cantidad_pagar, 2))."</th>";
              echo "</tr>";
              echo "</tbody>"; echo "<br>";

              $cosa++;

              if ($cantidad_pagar<=200){
                echo "</table>";
                break;
              }
            
            

          ?>
          

        </div>

      
      </div>

    <?php
            }
          }
      
    ?>
  </body>
</html>
    