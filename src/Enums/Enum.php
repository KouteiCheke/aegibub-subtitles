<?php

declare(strict_types=1);

namespace Aegisub\Enums;

use ReflectionClass;
use ReflectionException;

class Enum
{
    /**
     * Give all values of the class.
     *
     * @throws ReflectionException
     *
     * @return array
     */
    public static function getValues(): array
    {
        $reflectionClass = new ReflectionClass(static::class);

        return array_values($reflectionClass->getConstants());
    }
}
