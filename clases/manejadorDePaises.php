<?php
use NNV\RestCountries;

class Manejador
{
    // public static $restCountries = new RestCountries;

    public function __construct(){
        // $this->restCountries = new RestCountries;
    }

    public static function todos(){
        $restCountries = new RestCountries;
        echo json_encode($restCountries->all());
    }

    public static function porContinente($continente){
        $restCountries = new RestCountries;
        echo json_encode($restCountries->byRegion($continente));
    }

    public static function porSubregion($subregion){
        $restCountries = new RestCountries;
        echo json_encode($restCountries->byRegionalBloc($subregion));
    }

    public static function porIdioma($idioma){
        $restCountries = new RestCountries;
        echo json_encode($restCountries->byLanguage($idioma));
    }

    public static function porCapital($capital){
        $restCountries = new RestCountries;
        echo json_encode($restCountries->byCapitalCity($capital));
    }
}
?>