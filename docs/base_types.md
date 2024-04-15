# PHP Types

[index](../README.md)

## Built-in types - Scalars:

* bool type
* int type
* float type
* string type

```php
$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int
$an_float = 12.0;     // an float

echo get_debug_type($a_bool) . PHP_EOL;
echo get_debug_type($a_str) . PHP_EOL;
echo get_debug_type($a_str2) . PHP_EOL;
echo get_debug_type($an_int) . PHP_EOL;
echo get_debug_type($an_float) . PHP_EOL;
```

## Built in types

* null type
* array type
* object type
* resource type
* never type
* void type
* Relative class types: self, parent, and static
* callable type


## Literal types

* false type
* true type

## User-defined types (generally referred to as class-types)

* Interfaces
* Classes
* Enumerations

## Composite types
 
* Intersection of class-types (interfaces and class names).
* Union of types.


Ref: [php.net - PHP built in types](../src/basic_types.php)

