<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Eugene Sinamban',
            'email' => 'eugene.sinamban@gmail.com',
            'password' => bcrypt('testtest')
        ];
        
        $user = User::create($data);
        $user->assignRole('admin');
        $user->assignRole('Super Admin');

    }
}
