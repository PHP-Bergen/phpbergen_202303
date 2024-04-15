<?php

declare(strict_types=1); // Check the type of variables at runtime.

function sum(int $a, int $b) {
  return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum('1', '2'));
var_dump(sum(1.5, 2.5));
