<?php

class Car
{
    public string $spalva;
    public string $greitis;
    private float $rida = 0;

    public function vaziuoti(float $laikas = 1): void
    {
        echo "Automobilis vaziuoja" . $this->greitis. "greiciu";
        $this->rida += (int)$this->greitis * $laikas;
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }
    public function gautiRida(): float;
    {
        return $this->rida;
    }
}