<?php

namespace clientes;

abstract Class Cliente {

  private $email;
  private $pass;
  private $cuenta;
  public function __construct($email,$pass, \cuentas\Cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;

  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setPass($pass){
    $this->pass = $pass;
  }

  public function getPass(){
    return $this->pass;
  }
  public function setCuenta($cuenta){
    $this->cuenta = $cuenta;
  }
  public function getCuenta(){
      return $this->cuenta;
    }
  abstract public function cobrarServicios();

}
