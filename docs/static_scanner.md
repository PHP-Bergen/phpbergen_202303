# Static scanners

[index](../README.md)

## TypeError examples

```php
declare(strict_types=1);

function sum(int $a, int $b): int {
    return $a + $b;
}

echo sum(42, '1'); 
```

Fatal error: Uncaught TypeError: sum(): Argument #2 ($b) must be of type int, string given.

```php
class City
{
    public function __construct(private string $cityName) {}

    public city(): string
    {
        return $this->cityName;
    }
}
```

## Writing tests vs strict type system

Something of both in most languages.


* IDE with static analyser - Example PHPStorm
* [Psalm](https://psalm.dev/) - Is a static analysis tool that attempts to dig into your program and find as many type-related bugs as possible.
* [PHPStan](https://phpstan.org/) - Scans your whole codebase and looks for both obvious & tricky bugs.

### Example use of PHPStan

```shell
composer require --dev phpstan/phpstan
vendor/bin/phpstan analyse src
```
