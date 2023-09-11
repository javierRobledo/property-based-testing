<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Tests\Example2;

use Idealista\PropertyBasedTestingWorkshop\Example2\InMemoryRepository;
use Idealista\PropertyBasedTestingWorkshop\Example2\Person;
use Innmind\BlackBox\PHPUnit\BlackBox;
use Innmind\BlackBox\Set;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(InMemoryRepository::class)]
final class InMemoryRepositoryTest extends Framework\TestCase
{
    use BlackBox;

    public function test_an_entity_can_be_fetched_after_saving_it(): void
    {
    }
}
