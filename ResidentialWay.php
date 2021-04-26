<?php

require_once 'Bicycle.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle($objet)
    {
        if ($objet instanceof Bicycle) {
            $this->currentVehicles[] = $objet;
        }
    }

}
