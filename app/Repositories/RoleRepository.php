<?php
namespace App\Repositories;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleRepository
{
    public function getRoleNames() {
        $roles = Role::all();
        $roleNames = [];
        $roles->map(function($role) use (&$roleNames) {
            if ($role->name !== 'Super Admin') {
                $roleNames[] = $role->name;
            }
        });
        return $roleNames;
        
    }

    public function getUserRoles(User $user) {
        return $user->getRoleNames()->map(function ($role) {
            if ($role !== 'Super Admin') {
                return $role;
            }
        });
        
    }

    public function getRoles() {
        return Role::where('name', '!=', 'Super Admin')->get();
    }
}