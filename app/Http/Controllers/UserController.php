<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function show(User $user) {
        $roles = $this->roleRepository->getRoles();
        $userRoles = $this->roleRepository->getUserRoles($user)->toArray();
        return view('admin.pages.user.show', compact('user', 'roles', 'userRoles'));
    }

    public function update(User $user) {
        $data = request()->only([
            'name',
            'admin',
            'annotator'
        ]);
        
        $message = ['success' => 'User Details Updated Successfully!'];
        $result = $this->userRepository->updateUser($data, $user);

        return $result ?? redirect()->route('home')->with($message);
    }
}
