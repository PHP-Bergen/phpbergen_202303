<?php

interface wine {}
interface beer {}

class drinkAble implements wine, beer {}

function drink(wine&beer $drinkable): beer&wine
{
    echo 'Drinking';
    return $drinkable;
}

$result = drink(new drinkAble());
