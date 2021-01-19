<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function show(User $user) {
        $roles = Role::all();

        // get all user roles 
        $userRoles = $user->roles->map(function($role) {
            return $role->name;
        })->toArray();

        return view('admin.pages.user.show', compact('user', 'roles', 'userRoles'));
    }

    public function update(User $user) {
        //! TODO Work on update user update
        
    }
}
