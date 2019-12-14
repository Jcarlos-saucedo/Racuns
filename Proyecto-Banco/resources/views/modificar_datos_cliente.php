<?php
	actualizar($_POST['nom'], $_POST['apel'], $_POST['date'], $_POST['curp'], $_POST['rfc'], $_POST['cpost'], $_POST['no']);
	actualizar2($_POST['call'], $_POST['domic'], $_POST['col'], $_POST['city'], $_POST['est'], $_POST['no']);

	function actualizar($name, $apell, $datee, $curpp, $rfcc, $cpostt, $noo)
	{
		
		$conectar= new PDO("sqlite:prueba.db");
		$actualizar="UPDATE info_usuarios SET Nombre='".$name."', Apellidos='".$apell."', Nacimiento='".$datee."', CURP='".$curpp."', RFC='".$rfcc."', CodigoPostal='".$cpostt."' WHERE ID_u='".$noo."' ";
		$query_actualizar= $conectar->prepare($actualizar);
		$query_actualizar->execute();
	}

	function actualizar2($calll, $domicc, $coll , $cityy, $estt, $noo)
	{
		$conectar= new PDO("sqlite:prueba.db");
		$actualizar2="UPDATE direcciones SET Calle='".$calll."', Numero='".$domicc."', Colonia='".$coll."', Ciudad='".$cityy."', Estado='".$estt."' WHERE ID_d='".$noo."' ";
		$query_actualizar2= $conectar->prepare($actualizar2);
		$query_actualizar2->execute();
	}
?>

<script type="text/javascript">
	window.location.href='/gestionar-clientes';
</script>