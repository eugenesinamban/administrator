<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show(User $user) {
        $roles = Role::all();
        $userRoles = $user->getRoleNames()->toArray();

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
