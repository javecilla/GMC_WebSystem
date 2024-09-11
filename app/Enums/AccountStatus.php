<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

class AccountStatus extends Enum
{
  const ACTIVE = 'active';
  const IN_ACTIVE = 'inactive';

  /** Retrieve a map of enum keys and values. */
  public static function map() : array {
    return [
      static::ACTIVE => 'Active',
      static::IN_ACTIVE => 'In Active',
    ];
  }
}
