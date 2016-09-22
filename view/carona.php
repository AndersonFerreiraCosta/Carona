	<?php 
	
$campus = $_POST ['campus'];
	$data = $_POST ['data'];
	$periodo = $_POST ['periodo'];
	
	$carona->setData($data);
	//$carona->setIdCampus($Ccontroller->idCampus($campus));
	$carona->setPeriodo($periodo);
	
	if ($Ccontroller->save ( $carona )) {
	
		echo "carona sucesso";
	} else {
		echo "falha na carona";
	}
	
	?>