<?php

class Camper{
    // 1. Declaracion de Atributos
    private $nombre;
    private $email;
    private $celular;
    
    // 2. Metodo Constructor (Metodo Magico)
    // Alternativamente puedo inicializar con valores para parametrizados
    public function __construct($nombre, $email, $celular){
        $this->nombre = $nombre ;
        $this->email = $email;
        $this->celular = $celular;
    }

    // 3. Metodos (Getters and Setters)
        //get --> Se obtienen valores de propiedades
        //set --> Se modifican . setean valores de Atributos - Propiedades

    public function getNombre(){
        return $this->nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCelular(){
        return $this->celular;
    }

    public function getDatos(){
        return $this->nombre . '<br>' . $this->email . '<br>' . $this->celular;
    }

    public function getSaludo($Saludo){
        return "<br>" . $Saludo . "Campus";
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    public function setDatos($nombre,$email,$celular){
        return $this->nombre=$nombre . '<br>' . $this->email=$email . '<br>' . $this->celular=$celular . '<br>';
    }




    
}

// Instanciar clases --> Variables de Instancia
$camper = new Camper("Santiago","Santiago@gmail.com","3125902312");
/* echo $camper->getNombre() . "<br>", $camper->getEmail() . "<br>", $camper->getCelular(); */
/* echo $camper->setNombre("Vermen") . $camper->setEmail("Vermen@gmail.com") . $camper->setCelular("310543281"); */
echo $camper->setDatos("Vermen","Vermen@gmail.com","310543212");
/* echo $camper->getDatos(); */

echo $camper->getSaludo("hello");

?>