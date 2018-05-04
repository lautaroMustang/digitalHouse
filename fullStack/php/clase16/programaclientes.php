echo '<pre>';print_r($persona->getCuenta()->getBalance());echo '</pre>';
<?php

require_once('cuentas/gold.php');
require_once('clientes/persona.php');
require_once('clientes/pyme.php');
require_once('cuentas/classic.php');
require_once('bancos/banco.php');
$persona = new \clientes\Persona("gaston","elordi",30483548,'2018-02-04',"a@a.com","pepito", new \cuentas\Gold(236));

echo '<pre>';print_r($persona->getCuenta()->getBalance());echo '</pre>';

$persona->getCuenta()->acreditar(100);

echo '<pre>';print_r($persona->getCuenta()->getBalance());echo '</pre>';

$persona->cobrarServicio();

echo '<pre>';print_r($persona->getCuenta()->getBalance());echo '</pre>';

$pyme=new \clientes\pyme ('2020302','monroe 860','Digital house', 'cobranzas@dogital.com', 1234, new \cuentas\Gold(447));


$pyme->getCuenta()->acreditar(100000);
echo '<pre>';print_r($pyme->getCuenta()->getBalance());echo '</pre>';
$pyme->liquidarHaberes($persona,2000);
echo '<pre>';print_r($pyme->getCuenta()->getBalance());echo '</pre>';

echo '<pre>';echo $persona->mostrar();echo '</pre>';
echo '<pre>';echo $pyme->mostrar();echo '</pre> tiene ';
echo $pyme->getCuenta()->mostrar();echo '</pre>';
