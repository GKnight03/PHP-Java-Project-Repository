<?php

namespace Drugs\Drugs;

class Prescription extends Medication

{
    function __construct(){
        $this->isValid = NULL;
        $this->amount = 0;
    }
    public static function Prescription()
    {
        $local_this = new Prescription();
        return $local_this;
    }
    public $isValid = false;
    public $amount;
    // --Drugs.Prescription Drugs.Medication
    public function Ventolin()
    {
        $isPrescription = true;
        $medicationName = "Ventolin";
        echo "Ask CustomerPackage.Customer to Present Drugs.Prescription...","\n";
    }
    public function Proair()
    {
        $isPrescription = true;
        $medicationName = "Proair";
        echo "Ask CustomerPackage.Customer to Present Drugs.Prescription...","\n";
    }
    public function Novolog()
    {
        $isPrescription = true;
        $medicationName = "Novolog";
        echo "Ask CustomerPackage.Customer to Present Drugs.Prescription...","\n";
    }
    public function __toString(): string
    {
        return "Customer:"
            .'Prescription= ' . $this->isPrescription
            .'Medication= ' . $this->medicationName;
    }
}

