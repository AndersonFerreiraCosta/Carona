<?php

/*
* 	Descri��o do Arquivo
* 	@autor - 
* 	@data de cria��o - 
* 	@arquivo - 
*/

//Inclui a classe gen�rica CRUD
require_once("../functions/crud.class.php");

class CaronaController extends Crud {

//M�todo construtor

public function __construct() {

//Passa como par�metro a tabela

    parent::__construct("carona");

}

public function lista(){

	return $this->execute_query("SELECT * FROM carona ;");

}
public function idCampus($campus){
	$reg = mysqli_fetch_assoc($this->execute_query("SELECT * FROM campus WHERE nome = ".$campus));
	return $reg['idCampus'];
}

}

?>