<?php
namespace BaznaKlasa;

class BaznaKlasaVozilo {
    private $identifikacijskiBroj;
    protected $boja;

    public function __construct($boja = 'Nepoznata', $identifikacijskiBroj = 'ABC123') {
        $this->boja = $boja;
        $this->identifikacijskiBroj = $identifikacijskiBroj;
    }

    protected function getBoja() {
        return $this->boja;
    }

    public function prikaziOsnovneInformacije() {
        return "Boja vozila je: " . $this->getBoja() . ". Identifikacijski broj je: " . $this->identifikacijskiBroj;
    }
}
?>
