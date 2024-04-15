# Type theory

[index](../README.md)

## Strong or weak types?

```php
function findBy(int $id)
{
    //...
}

findBy(42)
```

## When is type checked

```php
declare(strict_types=1);

function findBy(int $id)
{
    $id = '' . $id; // string(2) "42"
}

findBy(42) // OK;
findBy('42') // TypeError: findBy(): Argument #1 ($id) must be of type int, string given;
```

## PHP a dynamic, weakly typed language

PHP checks the type of variables at runtime.