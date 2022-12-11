<?php



namespace Drugs\GeneralPractitioner;
use Drugs;


class GPServer extends Drugs\Drugs\Appointment
{
    function __construct(){
    }
    public static function GPServer($firstName, $lastName, $age, $address, $customerID)

    {
        $local_this = new GPServer();
        return $local_this;
    }
}
