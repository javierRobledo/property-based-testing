<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Tests\Example4;

use Idealista\PropertyBasedTestingWorkshop\Example4\GildedRose;
use Innmind\BlackBox\PHPUnit\BlackBox;
use Innmind\BlackBox\Set;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(GildedRose::class)]
final class GildedRoseTest extends Framework\TestCase
{
    use BlackBox;
}
