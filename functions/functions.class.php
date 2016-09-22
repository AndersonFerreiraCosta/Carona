<?php 
/*
 * 	Descrição do Arquivo
 * 	@author - 
 * 	@date - 
 * 	@description  - 
 */

class Functions {
	

	//Converte a data de dd/mm/aaaa para o formato: aaaa-mm-dd
	public function converterDataBanco($strData) {
		$strDataFinal = implode('-', array_reverse(explode('/',$strData)));
		return $strDataFinal;
	}
	
	//Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
	public function converterDataExibir($strData) {
		$strDataFinal = implode('/', array_reverse(explode('-',$strData)));
		return $strDataFinal;
	}
	

	
}

?>