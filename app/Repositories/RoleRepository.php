<?php
namespace App\Repositories;

use Spatie\Permission\Models\Role;

class RoleRepository
{
    public function getRoleNames() {
        $roles = Role::all();
        $roleNames = $roles->map(function($roles) {
            return $roles->name;
        });
        
        return $roleNames;
        
    }
}