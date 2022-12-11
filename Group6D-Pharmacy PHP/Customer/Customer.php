<?php

namespace Customer\Customer;

use Drugs\Prescription;


class Customer extends Prescription

{
    function __construct(){
        $this->firstName = NULL;
        $this->lastName = NULL;
        $this->age = 0;
        $this->address = NULL;
        $this->customerID = NULL;
    }
    // --Information--
    public $firstName;
    public $lastName;
    public $age;
    public $address;
    public $customerID;
    // Constructor
    public function __toString(): string
    {
        return "Customer:"
            .'FirstName= ' . $this->firstName
            .'lastName= ' . $this->lastName
            .'Age= ' . $this->age
            .'Address= ' . $this->address;
    }
}




