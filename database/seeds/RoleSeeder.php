<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create product permissions
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'read products']);
        Permission::create(['name' => 'update products']);
        Permission::create(['name' => 'delete products']);

        // create user permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create products');
        $admin->givePermissionTo('read products');
        $admin->givePermissionTo('update products');
        $admin->givePermissionTo('delete products');
        $admin->givePermissionTo('create users');
        $admin->givePermissionTo('update users');
        $admin->givePermissionTo('delete users');

        $annotator = Role::create(['name' => 'annotator']);
        $annotator->givePermissionTo('create products');
        $annotator->givePermissionTo('read products');
        $annotator->givePermissionTo('update products');
        $annotator->givePermissionTo('delete products');
    }
}
