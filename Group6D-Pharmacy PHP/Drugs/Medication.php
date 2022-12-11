<?php

namespace Drugs\Drugs;


class Medication
{
    function __construct(){
        $this->isPrescription = false;
        $this->medicationName = NULL;
        $this->panadolStock = 0;
        $this->strepsilStock = 0;
        $this->advilStock = 0;
        $this->ventolinStock = 0;
        $this->proairStock = 0;
        $this->novologStock = 0;
    }
    public static function Medication()
    {
        $local_this = new Medication();
        return $local_this;
    }
    // --Variables for all Medicine
    public $isPrescription;
    public $medicationName;
    // --Stock Amount Non-Drugs.Prescription
    public $panadolStock = 43;
    public $strepsilStock = 98;
    public $advilStock = 1;
    // --Stock Amount for Drugs.Prescription
    public $ventolinStock = 33;
    public $proairStock = 1;
    public $novologStock = 0;
    // --NON - PRESCRIPTION MEDICINE
    public function Panadol($requestedAmount)
    {
        $this->isPrescription = false;
        $this->medicationName = "Panadol";
        if ($this->panadolStock == 0 || ($this->panadolStock - $requestedAmount < 0))
        {
            // Ensures Sale Has Enough Stock To Go Through
            echo "NOT ENOUGH STOCK - Current Stock is: " . strval($this->panadolStock),"\n";
        }
        else
        {
            $this->panadolStock = $this->panadolStock - $requestedAmount;
            // Updates the Stock Amount based on transaction
            echo $this->medicationName . " Remaining Stock: " . strval($this->panadolStock),"\n";
        }
    }
    public function Strepsil($requestedAmount)
    {
        $this->isPrescription = false;
        $this->medicationName = "Strepsil";
        if ($this->strepsilStock == 0 || ($this->strepsilStock - $requestedAmount < 0))
        {
            // Ensures Sale Has Enough Stock To Go Through
            echo "NOT ENOUGH STOCK - Current Stock is: " . strval($this->strepsilStock),"\n";
        }
        else
        {
            $this->strepsilStock = $this->strepsilStock - $requestedAmount;
            echo $this->medicationName . " Remaining Stock: " . strval($this->strepsilStock),"\n";
        }
    }
    public function Advil($requestedAmount)
    {
        $this->isPrescription = false;
        $this->medicationName = "Advil";
        if ($this->advilStock == 0 || ($this->advilStock - $requestedAmount < 0))
        {
            // Ensures Sale Has Enough Stock To Go Through
            echo "NOT ENOUGH STOCK - Current Stock is: " . strval($this->advilStock),"\n";
        }
        else
        {
            $this->advilStock = $this->advilStock - $requestedAmount;
            echo $this->medicationName . " Remaining Stock: " . strval($this->advilStock),"\n";
        }
    }
}


