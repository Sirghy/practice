<?php


declare(strict_types=1);

namespace App\DAL\Interfaces;

use Illuminate\Support\Collection;
use App\Models\Role;

interface RoleRepositoryInterface
{
    public function getAllRoles(): Collection;

    public function findRoleById(int $id): ?Role;
}
