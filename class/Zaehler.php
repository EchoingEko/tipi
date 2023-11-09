<?php

class Zaehler
{
    private int $zobjekt;

    public function __construct(int $zobjekt)
    {
        $this->zobjekt = $zobjekt;
    }

    public function anzahlZuschauer()
    {
        if ($this->zobjekt <= 100) {
            return 'noch dürfen zuschauer rein';
        } elseif ($this->zobjekt == 100) {
            return 'kein platz für Zuschauer';
        } else {
            return 'hol die Feuerwehr';
        }
    }

}

$zaehler = new Zaehler(100);
echo $zaehler->anzahlZuschauer();