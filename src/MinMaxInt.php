<?php

/**
 * Wrapping primitives, like here: integers.
 */

class Beer
{
    public function __construct(private int $age) {}
}



class MinMaxInt
{
    public function minMaxInt(int $min, int $max, int $value)
    {
        // Validate/assert value.
        // Assign class to value.
    }
}

class BeerImproved
{
    public function __construct(private MinMaxInt $age) {
    }
}

$age = new MinMaxInt();
$age->minMaxInt(20, 40, 33);
$beer = new BeerImproved($age);


class Adult extends MinMaxInt
{
    public function age(int $age)
    {
        parent::minMaxInt(18, 150, $age);
    }
}

class BeerJustRight
{
    public function __construct(private Adult $age) {}
}

$email = '';
class Emmail
{
    public function __construct(private string $email)
    {
        //
    }
}
