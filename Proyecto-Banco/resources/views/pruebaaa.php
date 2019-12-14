<?php
  InsertarDatos($_POST['prestamo'],$_POST['tiempo'],$_POST['periodo'],$_POST['usuario'], $_POST['apellidos']);

  function InsertarDatos($cantidad, $time, $period,$user, $apelli)
  {
    $conectar= new PDO("sqlite:prueba.db");

    $con_nombre="select * from info_usuarios";
    $todos_prestamos= "SELECT * FROM usuarios";
    $query_usuario= $conectar->prepare($con_nombre);
    $query_prestamos= $conectar->prepare($todos_prestamos);
    $query_usuario->execute();
    $query_prestamos->execute();
    $iddd=0;
    
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
      while ($persona= $query_usuario->fetch()){
        if ($persona[1]==$user and $persona[2]==$apelli){
    ?>
      <div class="container">
        <div class="pruebadiv3 leftpdf column is-offset-1 is-4">
          <p class="margen">Nombre de cliente: </p>
          <p class="margen"><?php echo $persona[1], $persona[2]; ?></p>
        </div>
        <div class="pruebadiv3 leftpdf column is-offset-1 is-4">
          <p class="margen">Tiempo estimado: <?php echo $time?> Años</p>
          <br>
          <p class="margen">Interes: 8%</p>
          <?php
            $monto_final=$cantidad*((1+0.06)**$time);
          ?>
          <p class="margen">Monto total a pagar: $<?php echo $monto_final?></p>
        </div>
        <div class="pruebadiv1pdf column is-offset-1 is-4">
          <p class="margen">Monto de prestamo:$ <?php echo $cantidad?></p>
        </div>
      </div>
      <div>
        <div class="column is-offset-1 is-10">
          <?php
            $consult_years="SELECT years FROM usuarios WHERE ID='".$iddd."'";
            $años=$conectar->prepare($consult_years);
            $años->execute();

            $prod=$query_prestamos->fetch();
            $años_totales=$años->fetch();
            
            $mensual_anual=12;
            $cant_pagos=$time*$mensual_anual;
            $cantidad_pagar=$cantidad;
            $cosa=1;
            
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
      }
    }
    ?>
  </body>
</html>