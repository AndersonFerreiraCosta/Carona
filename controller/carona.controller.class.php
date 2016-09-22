<?php

/*
* 	Descriчуo do Arquivo
* 	@autor - 
* 	@data de criaчуo - 
* 	@arquivo - 
*/

//Inclui a classe genщrica CRUD
require_once("../functions/crud.class.php");

class CaronaController extends Crud {

//Mщtodo construtor

public function __construct() {

//Passa como parтmetro a tabela

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