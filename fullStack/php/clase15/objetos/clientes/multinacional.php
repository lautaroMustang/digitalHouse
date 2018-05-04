<?php

namespace clientes;

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

	public function cobrarServicios(){

		if ($this->getCuenta() instanceOf \cuentas\Gold) {
			$this->getCuenta()->setBalance($this->getCuenta()->getBalance()-(strlen($this->razonSocial)*5));
		}elseif ($this->getCuenta() instanceOf \cuentas\Platinum) {
			$this->getCuenta()->setBalance($this->getCuenta()->getBalance()*0.9);
		}elseif ($this->getCuenta() instanceOf \cuentas\Classic) {
			$this->getCuenta()->setBalance($this->getCuenta()->getBalance()-100);
		}elseif ($this->getCuenta() instanceOf \cuentas\Black) {
			$date = '2016/09/28';
			$weekday = date('l', strtotime($date));
			$aCobrar=500+(100*$weekday);
			$this->getCuenta()->setBalance($this->getCuenta()->getBalance()-$aCobrar);
		}


	}

}


  ?>
