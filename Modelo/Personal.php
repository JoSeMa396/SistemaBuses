<?php
require_once("Rol.php");
  class Empleado
  {
    //propiedades de la clase Empleado
    private $idEmpleado;
    private $idRol;
    private $ci;
    private $primerNombre;
    private $segundoNombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $telefono;
    private $genero;
    private $fechaNacimiento;
    private $activo;
    
    //constructor
    function __construct()
    { 
    }

    //funciones SET del empleado, se colocan los datos
    public function setIdEmpleado($idEmpleado)
    {  $this->idEmpleado = $idEmpleado;}
    public function setIdRol($idRol){$this->idRol = $idRol;}
    public function setCi($ci){$this->ci = $ci;}
    public function setPrimerNombre($primerNombre){$this->primerNombre = $primerNombre;}
    public function setSegundoNombre($segundoNombre){$this->segundoNombre = $segundoNombre;}
    public function setApellidoPaterno($apellidoPaterno){$this->apellidoPaterno = $apellidoPaterno;}
    public function setApellidoMaterno($apellidoMaterno){$this->apellidoMaterno = $apellidoMaterno;}
    public function setTelefono($telefono){$this->telefono = $telefono;}
    public function setGenero($genero){$this->genero = $genero;}
    public function setFechaNacimiento($fechaNacimiento){$this->fechaNacimiento = $fechaNacimiento;}
    public function setUsuario($usuario){$this->usuario = $usuario;}
    public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}
    public function setActivo($activo){$this->activo = $activo;}

    //funciones GET del empleado, devuelven los datos
    public function getIdEmpleado(){
      return $this->idEmpleado;}
    public function getIdRol(){return $this->idRol;}
    public function getCi(){return $this->ci;}
    public function getPrimerNombre(){return $this->primerNombre;}
    public function getSegundoNombre(){return $this->segundoNombre;}
    public function getApellidoPaterno(){return $this->apellidoPaterno;}
    public function getApellidoMaterno(){return $this->apellidoMaterno;}
    public function getTelefono(){return $this->telefono;}
    public function getGenero(){return $this->genero;}
    public function getFechaNacimiento(){return $this->fechaNacimiento;}
    public function getUsuario(){return $this->usuario;}
    public function getContrasenia(){return $this->contrasenia;}
    public function getActivo(){return $this->activo;}
  }//end class Empleado

/*
  $objEmpleado = new Empleado();
  $objEmpleado1 = new Empleado();

  $objEmpleado->setIdEmpleado(1);
  $objEmpleado->setCi('678-ABV');
  $objEmpleado->setPrimerNombre('Lourdes');
  $objEmpleado->setSegundoNombre('Gloria');
  $objEmpleado->setApellidoPaterno('Ortiz');
  $objEmpleado->setApellidoMaterno('Camargo');
  $objEmpleado->setTelefono(6767678);
  $objEmpleado->setGenero('F');


  $objEmpleado1->setIdEmpleado(2);
  $objEmpleado1->setCi('899898989');
  $objEmpleado1->setPrimerNombre('Dilan');
  $objEmpleado1->setApellidoPaterno('Chuquimia');
  $objEmpleado1->setApellidoMaterno('Mita');
  $objEmpleado1->setTelefono(70789890);
  $objEmpleado1->setGenero('M');

  echo " Empleado:  Identificador Empleado: ".$objEmpleado->getIdEmpleado()."  Ci: ".$objEmpleado->getCi()." primer nombre: ".$objEmpleado->getPrimerNombre();

  echo "<br>";

echo " Empleado1:  Identificador Empleado:   ".$objEmpleado1->getIdEmpleado()." Ci: ".$objEmpleado1->getCi()." primer nombre: ".$objEmpleado1->getPrimerNombre();
*/

 ?>