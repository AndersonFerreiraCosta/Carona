<?php

/*
 * Descriчуo do Arquivo
 * @autor -
 * @data de criaчуo -
 * @arquivo -
 */

// Inclui a classe genщrica CRUD
require_once ("../functions/crud.class.php");
class UsuarioController extends Crud {
	
	// Mщtodo construtor
	public function __construct() {
		
		// Passa como parтmetro a tabela
		parent::__construct ( "usuario" );
	}
	public function ultimoUsuario() {
		return  $this->execute_query("select * from usuario group by (idUsuario) desc limit 1;");
	}
	public function lista() {
		return $this->execute_query ( "SELECT * FROM usuario;" );
	}
	public function listaUsuarioCompleto($id) {
		return $this->execute_query ( "SELECT * FROM usuario, veiculo WHERE idUsuario = " . $id );
	}
	public function login($email, $senha){	
	
		$query = "SELECT * FROM usuario WHERE email = '$email' AND senha= '$senha'";
	
		
		if(mysqli_num_rows($this->execute_query($query)) > 0)
		{
			
			$reg = mysqli_fetch_array($this->execute_query("SELECT * FROM usuario WHERE email = '$email'"));
		    $_SESSION['idUsuario'] = $reg['idUsuario'];
			$_SESSION['login'] = $email;
			$_SESSION['senha'] = $senha;
			
			return true;
	
		}else {
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
			return false;
		}
	
	}
	public function pegarId() {
		$userId = 0;
		if (!empty($_SESSION['idUsuario'])) {
			$userId = $_SESSION['idUsuario'];
		}
		return $userId;
	}
}

?>