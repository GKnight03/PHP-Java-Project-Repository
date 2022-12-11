<?php

namespace Drugs\GeneralPractitioner;

class GP extends GPServer

{
    function __construct(){
        $this->isValid = NULL;
    }
    public $isValid;
    public static function GP($firstName, $lastName, $age, $address, $customerID)
    {
        $local_this = new GP();
        return $local_this;
    }
    public function updatedGP($firstName, $customerID, $isValid, $medicationName)
    {
    }
}

