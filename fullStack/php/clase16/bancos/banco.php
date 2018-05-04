<?php
namespace bancos;
require_once(realpath("clientes/cliente.php"));
/**
 *
 */
class Banco
{
  private $clientes=[];
  public function getClientes(){
    return $this->clientes;
  }
  public function addCliente(\clientes\cliente $cliente){
    $this->clientes[]=$clientes;
  }
  public function disponible()
  {
    $total=0;
    foreach ($this->getClientes() as $key => $cliente) {
      $total+=$cliente // TODO: rellenar esto
    }
  }
  // TODO: hacer funcion cobrar cobrarServicio

}

 ?>
