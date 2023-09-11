<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Example2;

final readonly class Person
{
    public function __construct(
        public int $id,
        public string $name,
        public int $age,
    ) {
    }
}
