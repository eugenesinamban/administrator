<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserRepository
{

    protected $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function updateUser($data, User $user) {
        $validator = Validator::make($data, [
            'name' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('user-show', [$user])
                ->withErrors($validator)
                ->withInput();
        }
        
        $availableRoles = $this->roleRepository->getRoleNames();

        // extract roles 
        $roles = [];
        collect($availableRoles)->map(function($datum) use (&$data, &$roles) {
            if (in_array($datum, $data)) {
                unset($data[$datum]);
                $roles[$datum] = true;
            } else {
                $roles[$datum] = false;
            }
        })->toArray();

        // update roles
        foreach ($roles as $role => $value) {
            if ($value) {
                $user->assignRole($role);
            } else {
                $user->removeRole($role);
            }
        }

        $user->update($data);

        return null;
    }

}