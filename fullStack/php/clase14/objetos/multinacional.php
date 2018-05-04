<?php
require_once('cliente.php');

Class Multinacional extends Cliente{
	private $cuit;
	private $direccion;
	private $razonSocial;
	private $oficinas;

	public function __construct($cuit,$direccion,$razonSocial, $oficinas, $email, $pass, $cuenta){
  	parent::__construct($email, $pass, $cuenta);
    $this->cuit = $cuit;
    $this->direccion = $direccion;
    $this->razonSocial = $razonSocial;
    $this->oficinas = $oficinas;
}

public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  public function getCuit(){
    return $this->cuit;
  }
  public function setDireccion($direccion){
    $this->direccion = $direccion;
  }

   public function getDireccion(){
    return $this->direccion;
  }
  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial(){
    return $this->razonSocial;
  }
    public function setOficinas($Oficinas){
    $this->oficinas = $oficinas;
  }
  public function getOficinas(){
    return $this->oficinas;
  }


}


  ?>