<?php 

/**
* 
*/
class Banelco
{
	private $multiploComision;

	public function getMultiploComision($cuenta){
		switch (get_class($cuenta)) {
			case 'Classic':
					return .95;
				break;
			case 'Platinum':
					if($cuenta->getBalance() >= 5000)
						return 1;
					else
						return .95;
				break;
			
			default:
					return 1;
		}
	}
}
?>