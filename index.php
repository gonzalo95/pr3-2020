<?php
require_once __DIR__ .'/vendor/autoload.php';
require_once './interfaces/iPais.php';
require_once './clases/argentina.php';
require_once './clases/pais.php';
require_once './clases/manejadorDePaises.php';

$arg = new Argentina("Buenos Aires", 44000000);
echo "Capital de Argentina: " . $arg->getCapital();
$arg->addCiudad("Rosario");
echo "Ciudades de Argentina: " . $arg->getCiudades();
Manejador::todos();
Manejador::porContinente("Africa");
Manejador::porSubregion("EU");
Manejador::porIdioma("es");
Manejador::porCapital("Montevideo");
?>