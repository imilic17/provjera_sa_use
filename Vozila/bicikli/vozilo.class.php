<?php
namespace Vozila\Bicikli;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo {
    private $imaKosaru;

    public function __construct($boja = 'Nepoznata', $imaKosaru = true) {
        parent::__construct($boja);
        $this->imaKosaru = $imaKosaru;
    }

    public function prikaziDetalje() {
        return "Ovo je Bicikl i " . ($this->imaKosaru ? "ima" : "nema") . " košaru.\n" .
            $this->prikaziOsnovneInformacije();
    }
}
?>