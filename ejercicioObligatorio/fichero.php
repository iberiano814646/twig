<?php

	/*
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=MyFileName '.date('d-m-Y_H\hi').'.csv');
	*/
	$header = array(
		"Town",
	);

	for ($i=1; $i <= $_POST['numeros']; $i++) { 
		$cab='T'.$i;
		array_push($header,$cab );
	}

	$header	= array_map("utf8_decode",$header);
	$output = fopen('Ficheros/MyFileName '.date('d-m-Y_H\hi').'.csv', 'a++');
	fputcsv($output, $header , ';');
	
	$suma = array();


	$k=0;
	for ($i=1; $i <= $_POST['numeros']; $i++) {
		$tmp= array(); 
		$cab='T'.$i;
		array_push($tmp,$cab );
		$total=0;
		for ($j=0; $j < $_POST['numeros']; $j++) {
			$k++;
			$total = $total+$_POST[$k];

			$datos=$_POST[$k];
			array_push($tmp,$datos);
		}
		array_push($suma,$total);

		fputcsv($output, $tmp, ';');
	}

	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Se ha guardado en la carpeta de Ficheros</p>

<p>La suma mas corta es : <?php print min($suma) ?></p>
<p>La suma mas larga es : <?php print max($suma) ?></p>

</body>
</html>

