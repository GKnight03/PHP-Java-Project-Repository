<?php

namespace Drugs\Drugs;

use Customer\Customer;

class Appointment extends Customer\Customer

{
    function __construct(){
    }
    public function __toString(): string
    {
        return "Appointment:"
            .'FirstName= ' . $this->firstName
            .'lastName= ' . $this->lastName
            .'Date= ' . $this->Date;

    }
    public function updatePrescription($firstName, $customerID, $isValid, $medicationName)
    {
        if ($isValid)
        {
            echo "Drugs.Prescription Updated; Thank you...","\n";
            print("\n");
        }
        else
        {
            echo "Please Refer CustomerPackage.Customer to GeneralPractitioner.GP","\n";
            print("\n");
        }
    }
}

