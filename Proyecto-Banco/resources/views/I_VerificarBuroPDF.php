
<?php 
    session_start();
    


    $host = "localhost";
    $basededatos = "hstw_banco";
    $usariodb = "root";
    $clavedb = "";

    $tabla_db1 = "users";
    $tabla_db2 = "direccion";
    $tabla_db3 = "creditos_bancarios"; 
    $conexion = mysqli_connect($host,$usariodb,$clavedb,$basededatos);

    $sqldatos= "select * from $tabla_db1";
    $sqldireccion= "select * from $tabla_db2";
    $sqlcreditos= "select * from $tabla_db3";

   
    $consulta2 = mysqli_query($conexion,$sqldireccion);
    $consulta3 = mysqli_query($conexion,$sqlcreditos);


  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../bulma-0.7.5/css/bulma.min.css">
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
      $sqldatos= "select * from $tabla_db1";
      $consulta = mysqli_query($conexion,$sqldatos);
      $datos=$consulta->fetch_assoc();

    
     ?>
    
      <div class="container">
        <div class="pruebadiv3 leftpdf column is-offset-1 is-11">
          <p style="text-align:center; margin-left: -90px;"> Verificar Buro </p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:10px; border: Black 2px solid; margin-right: 5%;">Folio de Consulta</p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:-3px; border: Black 2px solid; margin-right: 5%;"> <?php echo $datos['folio_consulta'] ?></p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:-3px; border: Black 2px solid; margin-right: 5%;">Fecha de Consulta</p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:-3px; border: Black 2px solid; margin-right: 5%;"><?php echo $datos['fecha_consulta'] ?></p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:-10px; border: Black 2px solid; margin-right: 5%;">Fecha de ingreso BC</p>
          <p style="color:black; margin-left: 510px; font-size: 11px; margin-top:-3px; border: Black 2px solid; margin-right: 5%;"><?php echo $datos['fecha_bc'] ?></p>
          <p class="margen" style="color:black; font-size: 16px; margin-top:15px; border: Black 2px solid; margin-right: 10%; color:black; text-align:center; background-color: #A2A2A2">Datos generales</p>
          <p class="margen" style="color:black; font-size: 16px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">Nombre de cliente: <?php echo $datos['nombre']; ?></p> 
          <p class="margen" style="color:black; font-size: 16px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">Fecha de nacimiento: <?php echo $datos['fecha_nacimiento'] ; ?></p>
          <p class="margen" style="color:black; font-size: 16px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">CURP: <?php echo $datos['curp'] ; ?></p>
          

          <p class="margen" style="font-size: 16px; margin-top:15px; border: Black 2px solid; margin-right: 10%; color:black; text-align:center; background-color: #A2A2A2">Domicilio Reportado</p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">Calle y Numero_________Colonia________Municipio_____Ciudad_________Estado_________CP___ </p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">__<?php echo utf8_decode($datos['calle']);?> <?php echo utf8_decode($datos['interior']); ?> __|__ <?php echo utf8_decode($datos['colonia']); ?> __|__ <?php echo utf8_decode($datos['municipio']); ?>__|__<?php echo utf8_decode($datos['ciudad']); ?>__|__<?php echo utf8_decode($datos['estado']);?>__|__<?php echo utf8_decode($datos['codigo_postal']);?>__ </p>
      
          <p class="margen" style="color:black; font-size: 16px; margin-top:15px; border: Black 2px solid; margin-right: 10%; color:black; text-align:center; background-color: #A2A2A2">Mensaje</p>
          <p class="margen" style="color:black; font-size: 16px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"><?php echo $datos['mensaje'] ; ?></p>

          <p class="margen" style="font-size: 16px; margin-top:15px; border: Black 2px solid; margin-right: 10%; color:black; text-align:center; background-color: #A2A2A2">Resumenes de creditos</p>
          <p class="margen" style="color:black; font-size: 16px;text-align:center; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">Creditos Bancarios</p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Nombre de la Institucion: <?php echo $datos['nombre_institucion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Codigo de Verificacion: <?php echo $datos['codigo_verificacion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Descripcion: <?php echo $datos['descripcion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Comportamiento: <?php echo $datos['comportamiento'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%; background-color:#08DB08;"> Estado: Verde</p>


          <p class="margen" style="font-size: 16px;text-align:center; margin-top:-2px; border: Black 2px solid; margin-right: 10%;">Creditos No Bancarios</p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Nombre de la Institucion: <?php echo $datos['nombre_institucion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Codigo de Verificacion: <?php echo $datos['codigo_verificacion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Descripcion: <?php echo $datos['descripcion'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%;"> Comportamiento: <?php echo $datos['comportamiento'] ; ?></p>
          <p class="margen" style="color:black; font-size: 14px; margin-top:-2px; border: Black 2px solid; margin-right: 10%; background-color:#08DB08;"> Estado: Verde</p>
            
        <div style="margin-top: 70px;"> 
           <img src=imagenes/Verde.png alt="" style="height: 100px; width: 120px">
           <img src="imagenes/Amarillo.png" alt=""  style="height: 100px; width: 100px; margin-left: 100px;">
           <img src="imagenes/Rojo.png" alt=""  style="height: 100px; width: 100px; margin-left: 150px;">
        </div>
        <div>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span style="color:green; margin-left:120px; ">Cuenta al corriente</span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span style=" color:#FFF600; text-align:center;">    Atraso de 1 a 89 Dias</span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span> </span>
          <span style="color: red; text-align:right;">     Atraso de 90 Dias o Deuda sin recuperar</span>
        </div>
    </div>    
      <?php 
       ?>
  </body>
</html>