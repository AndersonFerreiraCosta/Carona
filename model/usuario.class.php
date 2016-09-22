<?php
class usuarios {

	// Atributos
	private $idUsuario;
	private $nome;
	private $email;
	private $cidade;
	private $telefone;
	private $senha;
	
	// Getters
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getCidade() {
		return $this->cidade;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	public function getSenha() {
		return $this->senha;
	}
	
	// Setters
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}
	public function setSenha($senha) {
		$this->senha = $senha;
	}
}