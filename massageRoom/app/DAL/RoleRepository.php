<?php


declare(strict_types=1);

namespace App\DAL;

use App\DAL\Interfaces\RoleRepositoryInterface;
use App\Models\Role;
use Illuminate\Support\Collection;

class RoleRepository implements RoleRepositoryInterface
{
    public function getAllRoles(): Collection
    {
        return Role::all();
    }

    public function findRoleById(int $id): ?Role
    {
        return Role::find($id);
    }
}
