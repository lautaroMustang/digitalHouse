<?php

/*CBU, Balance, Fecha de último movimiento. Agregar setters y getters para obtener los datos de la cuenta. Agregar un constructor que permite inicializar el CBU.
*/

abstract Class Cuenta {

	private $cbu;
	private $balance;
	private $ultimoMovimiento;

	public function __construct($cbu){
		$this->cbu = $cbu;
	}

	public function setCBU($cbu){
		$this->cbu = $cbu;
	}

	public function getCBU(){
		return $this->cbu;
	}

	public function setBalance($balance){
		if($balance >= 0)
			$this->balance = $balance;
		else
			throw new Exception("No hay mas guita", 1);
	}

	public function getBalance(){
		return $this->balance;
	}

	public function setUltimoMovimiento($ultimoMovimiento){
		$this->ultimoMovimiento = $ultimoMovimiento;
	}

	public function getUltimoMovimiento(){
		return $this->ultimoMovimiento;
	}

	abstract public function debitar($monto, $origen);

	abstract function acreditar($monto);
}



?>