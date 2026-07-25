<?php

declare(strict_types=1);

namespace App\Services;

use App\DAL\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\throwException;

class UserService extends ExceptionService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(): Collection
    {
        return $this->userRepository->getAllUsersWithRoles();
    }

    public function findUserById(int $id): User
    {
        $user = $this->userRepository->findUserById($id);

        if (!$user) {
            $this->objectFindException();
        }
        return $user;
    }

    public function createUser(array $data): User
    {
        // $data = $this->camelToSnake($data);
        $data = $this->hashPassword($data);
        $user = $this->userRepository->createUser($data);
        return $user;
    }

    public function updateUser(int $id, array $data): User
    {
        // $data = $this->camelToSnake($data);
        $data = $this->hashPassword($data);
        $user = $this->userRepository->updateUser($id, $data);
        if (! $user) {
            $this->objectFindException();
        }

        return $user;
    }

    public function deleteUser(int $id): bool
    {
        $user = $this->userRepository->findUserById($id);
        if (!$user) {
            $this->objectFindException();
        }

        return $this->userRepository->deleteUser($id);

    }
    private function hashPassword(array $data): array
    {
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        return $data;
    }

    //---------------Пока заккоментил,го позже надо убрать----------------
    // private function camelToSnake(array $data): array
    // {
    //     $result = [];

    //     foreach ($data as $key => $value) {

    //         $snakeKey = Str::snake($key);

    //         $result[$snakeKey] = is_array($value) ? $this->camelToSnake($value) : $value;

    //     }

    //     return $result;
    // }
}
