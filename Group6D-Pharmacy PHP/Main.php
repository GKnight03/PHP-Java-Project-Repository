<?php
require_once "Drugs/Appointment.php";
require_once "Customer/Customer.php";
require_once "GeneralPractitioner/GP.php";
require_once "GeneralPractitioner/GPServer.php";
require_once "Drugs/Medication.php";
require_once "PharmacyStaff/Pharmacist.php";
require_once "Drugs/Prescription.php";
require_once "PharmacyStaff/SalesAssistant.php";
require_once "PharmacyStaff/Staff.php";


use Customer\Customer\Customer;
use Drugs\Drugs\Prescription;
use Drugs\Drugs\Appointment;
use




$Customer = new Customer();
$Customer->setfirstName("Josh");
$Customer->setlastName("Treacy");
$Customer->setAddress("12 Green Hills Road");
$Customer->setage("21");
$Customer->setCustomerID("0");

$Prescription = new Prescription();
$Prescription -> isPrescription();
$Prescription -> setmedicationName();

$Appointment = new Appointment();
$Appointment->setfirstName("Josh");
$Appointment->setlastName("Treacy");
$Appointment->setAddress("12 Green Hills Road");
$Appointment->setage("21");




print $Customer;
print $Prescription;
print $Appointment;

