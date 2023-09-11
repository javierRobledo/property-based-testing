<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Tests\Example1;

use Innmind\BlackBox\PHPUnit\BlackBox;
use Innmind\BlackBox\Set;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\TestCase;
use Psl\Type;

use function Idealista\PropertyBasedTestingWorkshop\Example1\add;

#[CoversFunction('Idealista\PropertyBasedTestingWorkshop\Example1\add')]
final class AddTest extends TestCase
{
    use BlackBox;

    public function test_is_commutative(): void
    {
    }

    public function test_is_associative(): void
    {
    }

    public function test_is_identity(): void
    {
    }
}
