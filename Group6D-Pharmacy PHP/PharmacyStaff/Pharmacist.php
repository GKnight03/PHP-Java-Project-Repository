<?php

namespace Drugs\PharmacyStaff;

class Pharmacist extends Staff
{
    function __construct(){
    }
    public static function Pharmacist($firstName, $lastName, $age, $address, $customerID)

    {
        $local_this = new Pharmacist();
        return $local_this;
    }


}