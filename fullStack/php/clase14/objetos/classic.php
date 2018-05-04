<?php 
/*
Classic: Si la transacción es desde un cajero Banelco, debe debitar un 5% mas. De Link un 10% mas. Desde caja no se agrega importe extra.
*/

require_once("cuenta.php");

class Classic extends Cuenta
{
	public function debitar($monto, $origen){
		switch ($origen) {
			case 'Banelco':
				$this->setBalance($this->getBalance() - $monto * 1.05);
				break;

			case 'Link':
				$this->setBalance($this->getBalance() - $monto * 1.10);
				break;
			
			default:
				$this->setBalance($this->getBalance() - $monto);
		}
	}

	//El banco se queda con un 5% si es Classic.
	public function acreditar($monto){
		$this->setBalance($this->getBalance() + $monto * .95);
	}
}

 ?>