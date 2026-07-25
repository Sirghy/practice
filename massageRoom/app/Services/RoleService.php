<?php


declare(strict_types=1);

namespace App\Services;

use App\DAL\Interfaces\RoleRepositoryInterface;
use App\Models\Role;

class RoleService extends ExceptionService
{
    private RoleRepositoryInterface $roleRepo;

    public function __construct(RoleRepositoryInterface $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function getAllRoles()
    {
        return $this->roleRepo->getAllRoles();
    }

    public function findRoleById(int $id): Role
    {

        $role = $this->roleRepo->findRoleById($id);
        if (!$role) {
            $this->objectFindException();
        }
        return $role;
    }
}
