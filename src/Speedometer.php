<?php 

class Speedometer
{
    // 1 mile => 1.60934 km
    const ONE_MILE = 1.60934;
    const NB_DECIMAL = 3;

    public static function kmToMiles(string $nbKm): string
    {
        return round($nbKm/self::ONE_MILE, self::NB_DECIMAL);
    }
    
    public static function milesToKm(string $nbMiles): float
    {
        return round(self::ONE_MILE * $nbMiles, self::NB_DECIMAL);
    }
}
