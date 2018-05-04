<?php
class Alumno {
  private $nombre;
  private $apellido;
  private $evaluaciones;

  public function setEvaluaciones($datos){
    $this->evaluaciones=$datos;
  }
  public function getEvaluaciones(){
    return $this->evaluaciones;
  }
  public function setNombre($datos){
    $this->nombre=$datos;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($datos){
    $this->apellido=$datos;
  }
  public function getApellido(){
    return $this->apellido;
  }
  // public function fullName(){
  //   return;
  // }
}

$alumno = new Alumno();
$alumno->setNombre("Lautaro");
$alumno->setApellido("Gonzalez");
$alumno->setEvaluaciones([0]);
print_r($alumno);
echo '<pre>';var_dump($alumno->getNombre()); echo '<pre>';
 ?>
