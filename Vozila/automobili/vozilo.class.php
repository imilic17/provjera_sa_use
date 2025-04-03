<?php
namespace Vozila\Automobili;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo {
    private $tipGoriva;

    public function __construct($boja = 'Nepoznata', $tipGoriva = 'Benzin') {
        parent::__construct($boja);
        $this->tipGoriva = $tipGoriva;
    }

    public function prikaziDetalje() {
        return "Ovo je Automobil, koristi gorivo: " . $this->tipGoriva . ", Boja: " . $this->getBoja() . "\n" .
            $this->prikaziOsnovneInformacije();
    }
}
?>