<?php

require_once('cuentas/gold.php');
require_once('clientes/persona.php');

$cuenta = new \cuentas\Gold(236);
$persona = new \clientes\Persona("gaston","elordi",30483548,'2018-02-04',"a@a.com","pepito", $cuenta);

$cuenta->acreditar(100, "Banelco");

echo '<pre>';var_dump($persona);echo '</pre>';
  $persona->cobrarServicios();
echo $persona->getCuenta()->getBalance();
?>
