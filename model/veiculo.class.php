<?php
class veiculos {
	
	// Atributos
	private $idVeiculo;
	private $modelo;
	private $vagas;
	private $usuario_idUsuario;
	
	// Getters
	public function getIdVeiculo() {
		return $this->idVeiculo;
	}
	public function getModelo() {
		return $this->modelo;
	}
	public function getVagas(){
		return $this->modelo;
	}
	public function getUsuario_idUsuario() {
		return $this->usuario_idUsuario;
	}
	
	//Setters
	public function setIdVeiculo($idVeiculo) {
		$this->idVeiculo = $idVeiculo;
	}
	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}
	public function setVagas($vagas){
		$this->vagas = $vagas;
	}
	public function setUsuario_idUsuario($usuario_idUsuario) {
		$this->usuario_idUsuario = $usuario_idUsuario;
	}
	
}