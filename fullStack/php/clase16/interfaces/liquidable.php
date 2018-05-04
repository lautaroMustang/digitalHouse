<?php
namespace interfaces;
require_once(realpath("clientes/cliente.php"));

interface Liquidable
{
  public function liquidarHaberes(\clientes\Persona $persona, $monto);
}

 ?>
