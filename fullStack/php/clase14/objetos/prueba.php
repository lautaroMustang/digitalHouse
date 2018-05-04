<?php
include('funciones.php');
include('usuario.php');

$usuario_1 = new usuario("Gastón", "Elordi", "gaston.elordi@gmail.com","hash");
imprimir($usuario_1);

echo $usuario_1->getEmail();
echo '<br>';

$usuario_1->setEmail("gaston.elordi@digitalhouse.com");

echo $usuario_1->getEmail();
echo '<br>';

echo $usuario_1->saludar();
echo '<br>';

echo Usuario::encriptarPassword("hash");
echo '<br>';
echo $usuario_1->encriptarPassword("hash");
?>