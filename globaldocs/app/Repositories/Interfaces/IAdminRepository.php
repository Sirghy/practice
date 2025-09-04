<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Admin;

interface IAdminRepository
{
    public function getAll(): array;
    public function getById(int $id): Admin;
    public function create(array $data): bool;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
