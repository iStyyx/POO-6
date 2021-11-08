<?php

class Speedometer
{
    const CONVERSION = 1.609344;

    public static function convertKmToMiles($number)
    {
        return round($number/self::CONVERSION, 2);
    }

    public static function convertMilesToKm($number)
    {
        return round($number*self::CONVERSION, 2);
    }
}