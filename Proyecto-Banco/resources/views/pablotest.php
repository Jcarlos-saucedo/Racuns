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
  <body>
  <?php
    $link = new PDO('mysql:host=localhost;dbname=hstw_banco', 'root', '');
    ?>
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
        <th>Estado de buró</th>
        <th>Vencimiento de prestamo</th>
        <th>Deuda</th>

      </tr>
      </thead>

      <?php
      $curp=$_POST['curp'];
      $rfc=$_POST['rfc'];
      $id=$_POST['num'];


      foreach ($link->query("SELECT * FROM users WHERE curp='".$curp."' AND rfc='".$rfc."' AND id='".$id."' ") as $row){


      ?>
      <tr>

      	<td><?php echo $row['id']?></td>
        <td><?php echo $row['curp'] ?></td>
        <td><?php echo $row['rfc'] ?></td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['apellido_paterno'] ?></td>
        <td><?php echo $row['apellido_materno'] ?></td>
        <td><?php echo $row['estado_cuenta'] ?></td>
        
        <td><?php echo $row['fecha_vencimiento'] ?></td>
        <td><?php echo $row['deuda'] ?></td>

      </tr>
      <?php
        }

      ?>

    </table>

    <form class="" action="pablotest2" method="POST" >
      <div class="" style="margin-left:500px; margin-top:-60px; "><br><br><br>
        <h1 class="control has-text-weight-bold title is-5" >Ingrese el monto que desea pedir:</h1>
        <input class="input inputs is-warning is-focused" type="text" name="monto" placeholder="Ingrese monto" style="width:300px;" required><br>
        <br><h1 class="control has-text-weight-bold">Ingrese fecha:</h1>
        <input class="input inputs is-warning is-focused" type="text" name="fecha" placeholder="00-00-0000" style="width:300px;" required><br>
        <input class="input inputs is-primary" type="hidden" name="ccurp" value="<?php echo $_POST['curp'] ?>" style="width:300px;" ><br>
        <input class="input inputs is-primary" type="hidden" name="rfcc" value="<?php echo $_POST['rfc'] ?>" style="width:300px;" >
        <input class="input inputs is-primary" type="hidden" name="numm" value="<?php echo $_POST['num'] ?>" style="width:300px;" >

        <button class="button is-success"  type="submit" id="" style="margin-top:13px; margin-left:40px;">Asignar</button>




      </div>
    </form>
    <button class="button is-danger"   onclick="location.href='/asignar_prestamo'" data-bulma-modal="close" style="margin-top:-40px; margin-left:650px;">Cancelar</button>

  </body>
</html>
