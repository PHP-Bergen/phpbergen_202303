<?php

declare(strict_types=1);

/**
 * PHP 8.1 - Pure intersection types.
 *
 * https://wiki.php.net/rfc/pure-intersection-types
 *
 * Only class types (interfaces and class names) are supported by intersection types.
 *
 * The rationale is that for nearly all standard types using them in an intersection
 * type result in a type which can never be satisfied (e.g. int&string).
 *
 * @link IntersectType.php // Simple example.
 *
 */
class A {
  private Traversable&Countable $countableIterator;

  public function setIterator(Traversable&Countable $countableIterator): void {
    $this->countableIterator = $countableIterator;
  }

  public function getIterator(): Traversable&Countable {
    return $this->countableIterator;
  }
}

// Avoid having to do:
	interface CountableIterator extends Iterator, Countable {}
	interface SeekableCountableIterator extends CountableIterator, SeekableIterator {}

/**
 * PHP 8.1 - never type.
 *
 * https://www.php.net/manual/en/language.types.never.php
 */
function redirects(string $uri): never {
  header('Location: ' . $uri);
  exit();
}

function redirectToLoginPage(): never {
  redirects('/login');
}

// If code later are change to return something:
function redirect(string $uri): never {
  if ($uri === '') {
    return; // Fatal error: A never-returning function must not return.
  }
  header('Location: ' . $uri);
  exit();
}
