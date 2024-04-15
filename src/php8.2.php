<?php

declare(strict_types=1);

/**
 * PHP 8.2 - true type
 *
 * https://wiki.php.net/rfc/true-type
 *
 * The counterpart of false. Allow null and false as stand-alone types.
 */

interface UserFinder {
  public function findUserByEmail(): User|null|false;
}

class User {
}

class AlwaysNullUserFinder implements UserFinder {
  public function findUserByEmail(): null {
    return NULL;
  }
}
