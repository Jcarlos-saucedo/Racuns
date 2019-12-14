<?php
	Eliminar($_GET['no']);
	Eliminar2($_GET['no']);
	
	function Eliminar($noo)
	{
		
		$conectar= new PDO("sqlite:prueba.db");
		$eliminar="DELETE FROM info_usuarios WHERE ID_u='".$noo."'";
		$query_eliminar= $conectar->prepare($eliminar);
		$query_eliminar->execute();
	}

	function Eliminar2($noo)
	{
		
		$conectar= new PDO("sqlite:prueba.db");
		$eliminar="DELETE FROM direcciones WHERE ID_d='".$noo."'";
		$query_eliminar= $conectar->prepare($eliminar);
		$query_eliminar->execute();
	}
?>

<script type="text/javascript">
	window.location.href='/gestionar-clientes';
</script>