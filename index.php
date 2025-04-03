<?php
require_once 'BaznaKlasa/BaznaKlasaVozilo.class.php';
require_once 'Vozila/Automobili/Vozilo.class.php';
require_once 'Vozila/Motori/Vozilo.class.php';
require_once 'Vozila/Bicikli/Vozilo.class.php';

use Vozila\Automobili\Vozilo as Automobil;
use Vozila\Motori\Vozilo as Motor;
use Vozila\Bicikli\Vozilo as Bicikl;

$auto = new Automobil('Crvena', 'Dizel');
$motor = new Motor('Plava', 2);
$bicikl = new Bicikl('Zelena', true);

echo $auto->prikaziDetalje() . "<br>";
echo $motor->prikaziDetalje() . "<br>";
echo $bicikl->prikaziDetalje() . "<br>";
?>