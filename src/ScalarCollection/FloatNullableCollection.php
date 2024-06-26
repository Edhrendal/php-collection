<?php

declare(strict_types=1);

namespace Steevanb\PhpCollection\ScalarCollection;

use Steevanb\PhpCollection\{
    AbstractCollection,
    Exception\InvalidTypeException
};

/** @extends AbstractCollection<float|null> */
class FloatNullableCollection extends AbstractCollection
{
    protected function assertValueType(mixed $value): static
    {
        if (is_null($value) === false && is_float($value) === false) {
            throw new InvalidTypeException('$value should be of type float or null.');
        }

        return $this;
    }
}
