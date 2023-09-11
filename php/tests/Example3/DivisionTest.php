<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Tests\Example3;

use Innmind\BlackBox\PHPUnit\BlackBox;
use Innmind\BlackBox\Set;
use PHPUnit\Framework;

use function Idealista\PropertyBasedTestingWorkshop\Example3\division;

#[Framework\Attributes\CoversFunction('Idealista\PropertyBasedTestingWorkshop\Example3\division')]
final class DivisionTest extends Framework\TestCase
{
    use BlackBox;

    public function test_dividing_a_number_by_1_returns_itself(): void
    {
    }

    public function test_dividing_any_non_zero_number_by_itself_returns_1(): void
    {
    }

    public function test_multiplying_two_numbers_returns_a_negative_number_if_one_of_them_is_negative(): void
    {
    }
}
