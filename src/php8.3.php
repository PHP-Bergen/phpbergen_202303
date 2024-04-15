<?php

declare(strict_types=1);

/**
 * PHP 8.3 - Typed class constants
 *
 * Support for declaring class, interface, trait, as well as enum constant types
 * (collectively called “class constants” from now on for the sake of simplicity)
 *
 * https://wiki.php.net/rfc/typed_class_constants
 */
trait T {
  const string TEST = E::TEST;   // T::TEST is a string too
}

interface I {
  const string TEST = E::TEST;   // I::TEST is a string as well
}

enum E {
  const string TEST = "Test1";   // E::TEST is a string
}

class Foo implements I {
  use T;

  const string TEST = E::TEST;  // Foo::TEST must also be a string
}

class Bar extends Foo {
  const string TEST = "Test2";  // Bar::TEST must also be a string, but the value can change
}

class Test {
    // this is legal
    public const string A = 'a';
    public const int B = 1;
    public const float C = 1.1;
    public const bool D = TRUE;
    public const array E = ['a', 'b'];

    // this is legal
    public const iterable F = ['a', 'b'];
    public const mixed G = 1;
    public const string|array H = 'a';
    public const int|null I = null;
    // this is legal (special exception)
    public const float J = 1;
    // this is illegal
    public const string K = 1;
    public const bool L = "";
    public const int M = NULL;
}
