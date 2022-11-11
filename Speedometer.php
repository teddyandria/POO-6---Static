<?php

class Speedometer
{
    public const MILES = 0.621;
    public const KM = 1.6;
    public float $km;

    public float $miles;




    public static function ConvertKmToMiles(float $km)
    {
        echo $km * self::MILES . ' Km';
    }

    public static function ConvertMilesToKm(float $miles)
    {
        echo $miles * self::KM . ' Miles';
    }
}
