<?php
$monto=$_POST["monto"];
$fecha=$_POST["fecha"];
$curpsita=$_POST['ccurp'];
$rf=$_POST['rfcc'];
$nu=$_POST['numm'];
$link = new PDO('mysql:host=localhost;dbname=hstw_banco', 'root', '');
$link->query("UPDATE users SET deuda='".$monto."',fecha_vencimiento='".$fecha."' WHERE curp='".$curpsita."'");




 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Asignar préstamos</title>
    <link rel="stylesheet" href="css/PR_estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style type="text/css"></style>
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/tab-modal.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
  </head>
  <body class="">
  <?php
    $link = new PDO('mysql:host=localhost;dbname=hstw_banco', 'root', '');
    ?>
    <div class="notification is-success">
      <button class="delete"></button>
      <p class="has-text-weight-bold title is-4" style="margin-left:450px;">PRESTAMO ASIGNADO CORECTAMENTE !</p>
    </div>
    <br>
    <h1 class="has-text-weight-bold title is-3" style="margin-left:400px;">Datos y estado de cuenta del cliente</h1><br>

    <table class="table table-striped table is-bordered is-striped is-narrow is-hoverable is-fullwidth" style="margin-left: 70px;width:1200px; ">
      <thead>
      <tr>
      	<th>ID de cliente</th>
      	<th>CURP</th>
      	<th>RFC</th>
        <th>Nombre cliente</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Vencimiento de prestamo</th>
        <th>Deuda</th>

      </tr>
      </thead>

      <?php
      $curp=$_POST['ccurp'];
      $rfc=$_POST['rfcc'];
      $id=$_POST['numm'];

      foreach ($link->query("SELECT * FROM users WHERE curp='".$curp."' AND rfc='".$rfc."' AND id='".$id."' ") as $row){

        ?>
      <tr>
      	<td><?php echo $row['id']?></td>
        <td><?php echo $row['curp'] ?></td>
        <td><?php echo $row['rfc'] ?></td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['apellido_paterno'] ?></td>
        <td><?php echo $row['apellido_materno'] ?></td>
        <td><?php echo $row['fecha_vencimiento'] ?></td>
        <td><?php echo $row['deuda'] ?></td>
      </tr>

      <?php
      	}

      ?>
    </table><br><br>

    <button class="button is-primary is-medium"   onclick="location.href='/asignar_prestamo'" data-bulma-modal="close" style="margin-top:20px; margin-left:1050px;">Nuevo prestamo</button>
  </body>
</html>
