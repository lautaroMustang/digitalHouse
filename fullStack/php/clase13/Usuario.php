<?php
/**
 *
 */
class Usuario
{
  private $nombre;
  private $mail;
  private $nacimiento;
  private $edad;
  private $password;

  public function setNombre($datos){
    $this->nombre=$datos;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setMail($datos){
    if (filter_var($datos, FILTER_VALIDATE_EMAIL)) {
      $this->mail=$datos;
    }else {
      echo '<pre>';
      throw new Exception("INGRESE MAiL VALIDO");
      echo '<pre>';
    }

  }
  public function getMail(){
    return $this->mail;
  }
  public function setNacimiento($datos){
    $this->nacimiento=$datos;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  public function setEdad(int $datos){
    $this->edad=$datos;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setPassword(String $datos){
    $this->password=self::encriptarPassword($datos);
  }
  public function getPassword(){
    return $this->password;
  }

  function __construct(String $nombre, String $nacimiento,int $edad, String $mail, String $password)
  {
    $this->setNacimiento($nacimiento);
    $this->setNombre($nombre);
    $this->setMail($mail);
    $this->setEdad($edad);
    $this->setPassword($password);
  }
  public function saludarConMiNombre(){
    echo "Hola, mi nombre es ".$this->nombre;
  }
  static function encriptarPassword(String $password):String{
    return password_hash($password,PASSWORD_DEFAULT);
  }
}

 ?>
