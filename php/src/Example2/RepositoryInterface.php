<?php

declare(strict_types=1);

namespace Idealista\PropertyBasedTestingWorkshop\Example2;

interface RepositoryInterface
{
    public function findById(int $id): ?Person;

    public function save(Person $person): void;
}
