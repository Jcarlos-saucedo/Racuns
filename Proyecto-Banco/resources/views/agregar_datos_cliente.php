<?php

	agregar($_POST['nom'], $_POST['apel'], $_POST['date'], $_POST['curp'], $_POST['rfc'], $_POST['cpost']);
	agregar2($_POST['call'], $_POST['domic'], $_POST['col'], $_POST['city'], $_POST['est']);

	function agregar($name, $apell, $datee, $curpp, $rfcc, $cpostt)
	{
		
		$conectar= new PDO("sqlite:prueba.db");
		$actualizar="INSERT INTO info_usuarios (Nombre, Apellidos, Nacimiento, CURP, RFC, CodigoPostal) VALUES ('".$name."', '".$apell."', '".$datee."', '".$curpp."', '".$rfcc."', '".$cpostt."')";
		$query_actualizar= $conectar->prepare($actualizar);
		$query_actualizar->execute();

		$actualizar2="INSERT INTO usuarios (years, fecha, cantidadd) VALUES (0,'00-00-00',0)";
		$query_actualizar2= $conectar->prepare($actualizar2);
		$query_actualizar2->execute();
	}

	function agregar2($calll, $domicc, $coll , $cityy, $estt)
	{
		$conectar= new PDO("sqlite:prueba.db");
		$actualizar="INSERT INTO direcciones (Calle, Numero, Colonia, Ciudad, Estado) VALUES ('".$calll."', '".$domicc."', '".$coll."', '".$cityy."', '".$estt."')";
		$query_actualizar= $conectar->prepare($actualizar);
		$query_actualizar->execute();
	}
?>

<script type="text/javascript">
	window.location.href='/gestionar-clientes';
</script>