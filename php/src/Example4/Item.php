<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Example4;

final readonly class Item
{
    public function __construct(
        public string $name,
        public int $sellIn,
        public int $quality
    ) {
    }

    public function __toString(): string
    {
        return (string) "{$this->name}, {$this->sellIn}, {$this->quality}";
    }
}
