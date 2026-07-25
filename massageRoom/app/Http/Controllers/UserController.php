<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DomainException;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    private UserService $userServ;
    private RoleService $roleServ;
    public function __construct(UserService $userServ, RoleService $roleServ)
    {
        $this->userServ = $userServ;
        $this->roleServ = $roleServ;
    }

    public function index()
    {
        $users = $this->userServ->getAllUsers();
        return view('users.allUsers', compact('users'));

    }
    public function show(int $id)
    {
        $user = $this->userServ->findUserById($id);
        return view('layouts.user_layout', compact('user'));

    }
    public function create()
    {
        $roles = $this->roleServ->getAllRoles();
        return view('users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        try {
            //$data = $request->validated();
            $this->userServ->createUser($request->mapped());

            return redirect()->route('users.allUsers')->with('success', 'User created successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(int $id, UpdateUserRequest $request): JsonResponse
    {
        try {
            $this->userServ->updateUser($id, $request->validated());
            return response()->json(['success' => true,'message' => 'User was updated' ]);
        } catch (DomainException $e) {
            return response()->json(['success' => false,'message' => $e->getMessage()], 500);
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->userServ->deleteUser($id);
            return response()->json(['success' => true,'message' => 'User was deleted']);
        } catch (DomainException $e) {
            return response()->json(['success' => false,'message' => $e->getMessage()], 500);
        }
    }
}
