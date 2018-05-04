<?php

class Usuario {
	private $nombre;
	private $apellido;
	private $email;
	private $password;

	public function __construct(String $nombre, String $apellido, String $email, String $password) {
		$this->setNombre($nombre);
		$this->setApellido($apellido);
		$this->setEmail($email);
		$this->setPassword($password);
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setEmail($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception('Ingrese un email válido.');
		}

		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function saludar() {
		return "Hola ".$this->getNombre();
	}

	public function setPassword($password) {
		$this->password = self::encriptarPassword($password);
	}

	public function getPassword() {
		return $this->password;
	}

	static public function encriptarPassword(String $password) {
		return password_hash($password, PASSWORD_DEFAULT);
	}

}

?>