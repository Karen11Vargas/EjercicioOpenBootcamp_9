<?php

class Persona{

    public $edad;
    public $nombre;
    public $telefono;

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad= $edad;
    }

    
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre= $nombre;
    }

    
    function getTelefono(){
        return $this->telefono;
    }

    function setTelefono($telefono){
        $this->telefono= $telefono;
    }
    
}

class Cliente extends Persona{
    public $credito;

    function getCredito(){
        return $this->credito;
    }

    function setCredito($credito){
        $this->credito= $credito;
    }
}

class Trabajador extends Persona{
    public $salario;

    function getSalario(){
        return $this->salario;
    }

    function setSalario($salario){
        $this->salario= $salario;
    }
}

$cliente = new Cliente();
$persona = new Persona();
$trabajador = new Trabajador();
