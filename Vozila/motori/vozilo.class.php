<?php
namespace Vozila\Motori;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo {
    private $brojKotaca;

    public function __construct($boja = 'Nepoznata', $brojKotaca = 2) {
        parent::__construct($boja);
        $this->brojKotaca = $brojKotaca;
    }

    public function prikaziDetalje() {
        return "Ovo je Motor s " . $this->brojKotaca . " kotača.\n" .
            $this->prikaziOsnovneInformacije();
    }
}
?>