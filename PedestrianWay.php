<?php

require_once 'Bicycle.php';


final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle($objet)
    {
        if ($objet instanceof Bicycle) {
            $this->currentVehicles[] = $objet;
        }
    }

}
