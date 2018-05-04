<?php

namespace clientes;

require_once('cliente.php');

Class Persona extends Cliente{
	private $nombre;
	private $apellido;
	private $documento;
	private $nacimiento;

  public function __construct($nombre,$apellido,$documento,$nacimiento, $email, $pass, $cuenta){
  	parent::__construct($email, $pass, $cuenta);
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
	public function cobrarServicios(){
		if ($this->getCuenta() instanceOf \cuentas\Gold) {
			$this->getCuenta()->setBalance($this->getCuenta()->getBalance()-(strlen($this->apellido)*10));
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

//  OPCION QUE HIZO KOBRADOR	Persona
// public function cobrarServicios(){
//    $monto =0;
//    $saldoActual = $this->getCuenta()->getBalance();
//
//    switch (get_class($this->getCuenta())){
//      case 'cuentas\Classic':
//        $monto = 100;
//        break;
//      case 'cuentas\Gold':
//        $monto = strlen($this->getApellido())*10;
//        break;
//      case 'cuentas\Platinum':
//        $monto = $this->getCuenta()->getBalance()*.1;
//        break;
//      case 'cuentas\Black':
//        $date = '2016/09/28';
//        $weekday = date('N', strtotime($date));
//        $monto = 500 + 100 * $weekday;
//        break;
//      }
//      $this->getCuenta()->setBalance($saldoActual-$monto);
//  }

}

?>
