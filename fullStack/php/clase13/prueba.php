<?php
include('Usuario.php');
function saludar($usuario){
  echo "Hola ". $usuario->getNombre();
}

$usuario1 = new Usuario("Lautaro Gonzalez",'1984-06-12',33, "lautaromg84@gmail.com","pepepepe");
echo '<pre>';var_dump($usuario1); echo '<pre>';
print_r($usuario1->getMail());
$usuario1->setMail('lautarogonzalez@outlool.com');echo '<pre>';
print_r($usuario1->getMail());echo '<pre>';
saludar($usuario1);echo '<pre>';
$usuario1->saludarConMiNombre();

echo '<pre>';
print_r($usuario1->getPassword());echo '<pre>';
$usuario1->setPassword("lililili");
echo '<pre>';
print_r($usuario1->getPassword());echo '<pre>';
echo '<pre>';
print_r($usuario1::encriptarPassword("popopopos"));echo '<pre>';
 ?>
