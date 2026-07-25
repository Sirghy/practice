<?php

declare(strict_types=1);

namespace App\DAL;

use App\DAL\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Exception;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUsersWithRoles(): Collection
    {
        return User::with('role')->get();
    }


    public function findUserById(int $id): ?User
    {
        return User::with('role')->find($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data)->load('role');
    }

    public function updateUser(int $id, array $data): ?User
    {
        $user = User::find($id);
        $user->update($data);
        return $user->refresh()->load('role');
    }

    public function deleteUser(int $id): bool
    {
        $user = User::find($id);
        return $user->delete();
    }
}
