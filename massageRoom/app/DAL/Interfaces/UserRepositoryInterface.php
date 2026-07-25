<?php

declare(strict_types=1);

namespace App\DAL\Interfaces;

use Illuminate\Support\Collection;
use App\Models\User;

interface UserRepositoryInterface
{
    public function getAllUsersWithRoles(): Collection;

    public function findUserById(int $id): ?User;

    public function createUser(array $data): User;

    public function updateUser(int $id, array $data): ?User;

    public function deleteUser(int $id): bool;
}
