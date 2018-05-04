<?php
require_once('persona.php');
require_once('pyme.php');
require_once('multinacional.php');

require_once('gold.php');

$cuenta = new Gold(236);
$persona = new Persona("gaston","elordi",30483548,'2018-02-04',"a@a.com","pepito", $cuenta);

$cuenta->acreditar(100, "Banelco");

echo '<pre>';var_dump($persona);echo '</pre>';