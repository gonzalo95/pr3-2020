<?php
require_once './interfaces/iPais.php';
require_once 'pais.php';

class Argentina extends Pais implements iPais
{
    public $poblacion;
    public $ciudades = array();

    public function __construct($capital, $poblacion){
        parent::__construct($capital);
        $this->poblacion = $poblacion;
        array_push($this->ciudades, $capital);
    }

    public function getCapital(){
        return $this->capital;
    }

    public function addCiudad($ciudad){
        array_push($this->ciudades, $ciudad);
    }

    public function getCiudades(){
        $string = "";
        foreach ($this->ciudades as $c) {
            $string .= $c . " ";
        }
        return $string;
    }
}

?>