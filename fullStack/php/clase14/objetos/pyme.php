<?php
 require_once('cliente.php');

Class Pyme extends Cliente{
	private $cuit;
	private $direccion;
	private $razonSocial;

public function __construct($cuit,$direccion,$razonSocial, $email, $pass, $cuenta){
  	parent::__construct($email, $pass, $cuenta);
    $this->cuit = $cuit;
    $this->direccion = $direccion;
    $this->razonSocial = $razonSocial;
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

}
  ?>
