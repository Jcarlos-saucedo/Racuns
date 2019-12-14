<?php
	require_once('../libreria/fpdf/fpdf.php');
	$conectar = new PDO("sqlite:../../prueba.db");
	$sqlproductos= "select * from productos";
	$sqlusuarios= "select * from usuarios";
	$todos_prestamos= "SELECT * FROM usuarios";
	$query_productos= $conectar->prepare($sqlproductos);
	$query_usuarios= $conectar->prepare($sqlusuarios);
	$query_prestamos= $conectar->prepare($todos_prestamos);
	$query_productos->execute();
	$query_usuarios->execute();
	$query_prestamos->execute();

	while($fila=$query_productos->fetch() and $usuario=$query_usuarios->fetch()){


	$pdf = new FPDF();
	#$css = file_get_contents('css/style.css');
	#$mpdf->writehtml($css, 1);
	$pdf->AddPage();
	$pdf->Image("imagenes/hstw.png", 80, 10, 60);
	$pdf->Ln(25);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(100,10,"Nombre del usuario", 1, 0, 'C');
	$pdf->Cell(40,10,"", 0, 0);
	$pdf->Cell(50,10,"Tiempo estimado", 1, 1, 'C');
	$pdf->Cell(50,10,$usuario[1], 1, 0,'C');
	$pdf->Cell(50,10,$usuario[2], 1, 0,'C');
	$pdf->Cell(40,10,"", 0, 0);
	$pdf->Cell(50,10,"".$usuario[3]." Years", 1, 1, 'C');

	$pdf->Ln(10);
	$pdf->Cell(50,10,"Monto de prestamo", 1, 0, 'C');
	$pdf->Cell(30,10,"Interes", 1, 0, 'C');
	$pdf->Cell(60,10,"Monto total a pagar", 1, 1, 'C');
	$pdf->Cell(50,10,$usuario[5], 1, 0, 'C');
	$pdf->Cell(30,10,"6%", 1, 0, 'C');
	$monto_final= $usuario[5]*((1+0.08)**$usuario[3]);
	$pdf->Cell(60,10,(round($monto_final,2)), 1, 1, 'C');

	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(25,10,"# de Pago", 1, 0, 'C');
	//$pdf->Cell(35,10,"Fecha de pago", 1, 0, 'C');
	$pdf->Cell(50,10,"Cuota a pagar", 1, 0, 'C');
	$pdf->Cell(40,10,"Interes", 1, 0, 'C');
	$pdf->Cell(40,10,"Capital amortizado", 1, 0, 'C');
	$pdf->Cell(35,10,"Capital final", 1, 1, 'C');

	$consult_years="SELECT years FROM usuarios WHERE Nombre='".$usuario[1]."'";
	$años=$conectar->prepare($consult_years);
	$años->execute();

	$prod=$query_prestamos->fetch();
	$años_totales=$años->fetch();

	$mensual_anual=12;
	$cant_pagos=$años_totales[0]*$mensual_anual;
	$cantidad_pagar=$prod[5];
	$cosa=1;
	while($cosa){
		
		//$cantidad_pagar=$prod[5]/$cant_pagos;
		$interes=$cantidad_pagar*(0.06/12);

		/////////////
		$pdf->Cell(25,10,$cosa, 1, 0, 'C');
		/////////////

		//$pdf->Cell(35,10,"00-00-00", 1, 0, 'C');

		/////////////
		$pdf->Cell(50,10,"$".(round($cantidad_pagar,2))."", 1, 0, 'C');
		$pdf->Cell(40,10,(round($interes,2)), 1, 0, 'C');
		/////////////

		$amortizacion=$cantidad_pagar*((0.06/(1-(1.06)**(-($cant_pagos)))));
		$amortizacion_final=$amortizacion-$interes;

		/////////////
		$pdf->Cell(40,10,(round($amortizacion_final,2)), 1, 0, 'C');
		/////////////

		$cantidad_pagar=$cantidad_pagar-$amortizacion_final;

		/////////////
		$pdf->Cell(35,10,(round($cantidad_pagar,2)), 1, 1, 'C');
		/////////////

		$cosa++;
		if ($cantidad_pagar<=1){
			break;
		}
		}
	$pdf->Output();
	}
?>




