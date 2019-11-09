<?php


class Clock
{
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tommorow()
    {
        return time() + self::DAY_IN_SECONDS;
    }
}

echo "day in seconds: ", Clock::DAY_IN_SECONDS . "<br>";

$clock = new Clock; 

echo "tommorow day in seconds: ",$clock->tommorow() . "<br>"; 
