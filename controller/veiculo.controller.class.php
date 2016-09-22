<?php

/*
* 	Descriчуo do Arquivo
* 	@autor - 
* 	@data de criaчуo - 
* 	@arquivo - 
*/

//Inclui a classe genщrica CRUD
require_once("../functions/crud.class.php");

class VeiculoController extends Crud {

//Mщtodo construtor

public function __construct() {

//Passa como parтmetro a tabela

    parent::__construct("veiculo");

}

public function lista(){

	return $this->execute_query("SELECT * FROM veiculo ;");

}



}

?>