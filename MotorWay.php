<?php

require_once 'HighWay.php';
require_once "Car.php";

final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle($objet)
    {
        if($objet instanceof Car){
            $this->currentVehicles[] = $objet;
        }
    }

}

