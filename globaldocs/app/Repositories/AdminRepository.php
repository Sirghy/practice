<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Interfaces\IAdminRepository;
use App\Models\Admin;
use PDO;

class AdminRepository implements IAdminRepository
{
    private PDO $dbConnection;
    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
    public function getAll(): array
    {
        $tmt = $this->dbConnection->query("SELECT * FROM db_admin");
        $adminsData = $tmt->fetchAll(PDO::FETCH_ASSOC);
        $admins = [];
        foreach ($adminsData as $row) {
            $admin = new Admin();
            $admin->getID((int)$row['id']);
            $admin->setActive((int)$row['active']);
            $admin->setTitle($row['title']);
            $admin->setLink($row['link']);
            $admin->setImage($row['image']);
            $admin->setNumPage((int)$row['num_page']);
            $admin->setParentId((int)$row['parent_id']);
            $admin->setPageId((int)$row['page_id']);
            $admin->setSort((int)$row['sort']);
            $admin->setDbTable($row['db_table']);
            $admin->interface = $row['interface'];

            $admins[] = $admin;
        }
        return $admins;
    }
    public function getById(int $id): Admin
    {
        // Implementation of the method to retrieve an admin record by ID
        return new Admin();
    }
    public function create(array $data): bool
    {
        // Implementation of the method to create a new admin record
        return true;
    }
    public function update(int $id, array $data): bool
    {
        // Implementation of the method to update an existing admin record
        return true;
    }
    public function delete(int $id): bool
    {
        // Implementation of the method to delete an admin record
        return true;
    }
}
