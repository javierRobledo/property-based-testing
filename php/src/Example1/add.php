<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Example1;

use Psl\Type;

/**
 * @param int|numeric-string $a
 * @param int|numeric-string $b
 *
 * @return numeric-string
 */
function add(int|string $a, int|string $b): string
{
    return bcadd(
        Type\numeric_string()->coerce($a),
        Type\numeric_string()->coerce($b)
    );
}
