<?php

class Alumno {

	private $nombre;
	private $apellido;
	private $evaluaciones;

	public function setNombre(String $miNombre) {
		$this->nombre = $miNombre;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setApellido(String $miApellido) {
		$this->apellido = $miApellido;
	}	

	public function setEvaluaciones($datos) {
		$this->evaluaciones = $datos;
	}

	public function getEvaluaciones() {
		return $this->evaluaciones;
	}
}

$alumno = new Alumno();
$alumno->setNombre("gaston");
$alumno->setApellido("elordi");
$alumno->setEvaluaciones([0]);
print_r($alumno);

echo '<pre>';var_dump($alumno->getNombre());echo '</pre>';

echo '<pre>';var_dump($alumno->getApellido());echo '</pre>';

echo '<pre>';var_dump($alumno->getEvaluaciones());echo '</pre>';



?>