<?php

/*
* 	Descri��o do Arquivo
* 	@autor - 
* 	@data de cria��o - 
* 	@arquivo - 
*/

//Inclui a classe gen�rica CRUD
require_once("../functions/crud.class.php");

class VeiculoController extends Crud {

//M�todo construtor

public function __construct() {

//Passa como par�metro a tabela

    parent::__construct("veiculo");

}

public function lista(){

	return $this->execute_query("SELECT * FROM veiculo ;");

}



}

?>