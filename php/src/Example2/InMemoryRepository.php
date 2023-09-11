<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Example2;

use Psl\Collection\MutableMap;
use Psl\Collection\MutableMapInterface;

final readonly class InMemoryRepository implements RepositoryInterface
{
    /**
     * @param MutableMapInterface<int, Person> $persons
     */
    public function __construct(
        private MutableMapInterface $persons = new MutableMap([]),
    ) {
    }

    public function findById(int $id): ?Person
    {
        return $this->persons->get($id);
    }

    public function save(Person $person): void
    {
        $this->persons->add($person->id, $person);
    }
}
