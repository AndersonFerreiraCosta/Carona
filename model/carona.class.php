<?php
class carona {
	
	// Atributos
	private $idCarona;
	private $usuario_idUsuario;
	private $data;
	private $periodo;
	private $campus_idCampus;
	private $veiculo_idVeiculo;
	
	// Getters
	public function getIdCarona() {
		return $this->idCarona;
	}
	public function getUsuario_idUsuario() {
		return $this->usuario_idUsuario;
	}
	public function geData() {
		return $this->data;
	}
	public function getPeriodo() {
		return $this->periodo;
	}
	public function getCampus_idCampus() {
		return $this->campus_idCampus;
	}
	public function getVeiculo_idVeiculo() {
		return $this->veiculo_idVeiculo;
	}
	
	// Setters
	public function setIdCarona($idCarona) {
		$this->idCarona = $idCarona;
	}
	public function setUsuario_idUsuario($usuario_idUsuario) {
		$this->usuario_idUsuario = $usuario_idUsuario;
	}
	public function setData($data) {
		$this->data = $data;
	}
	public function setPeriodo($periodo) {
		$this->periodo = $periodo;
	}
	public function setCampus_idCampus($campus_idCampus) {
		$this->campus_idCampus = $campus_idCampus;
	}
	public function setVeiculo_idVeiculo($veiculo_idVeiculo) {
		$this->veiculo_idVeiculo = $veiculo_idVeiculo;
	}
}