<?php

namespace Drugs\PharmacyStaff;

class Staff
{
    function __construct(){
        $this->firstName = NULL;
        $this->lastName = NULL;
        $this->jobType = NULL;
        $this->staffID = 0;
    }
    private $firstName;
    private $lastName;
    private $jobType;
    private $staffID;
    // --Getters and Setters
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($newFirstName)
    {
        $this->firstName = $newFirstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($newLastName)
    {
        $this->lastName = $newLastName;
    }
    public function getJobType()
    {
        return $this->jobType;
    }
    public function setJobType($newJobType)
    {
        $this->jobType = $newJobType;
    }
    public function getStaffID()
    {
        return $this->staffID;
    }
    public function setStaffID($newStaffID)
    {
        $this->staffID = $newStaffID;
    }
    // --Constructor
    public static function Staff($firstName, $lastName, $jobType, $staffID)
    {
        $local_this = new Staff();
        $local_this->firstName = $firstName;
        $local_this->lastName = $lastName;
        $local_this->jobType = $jobType;
        $local_this->staffID = $staffID;
        return $local_this;
    }
    // --toString
    public function toString()
    {
        return "Confirmed by: " . $this->jobType . " " . $this->firstName . " staffID: " . strval($this->staffID);
    }
}

