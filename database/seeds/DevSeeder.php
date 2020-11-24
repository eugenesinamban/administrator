<?php

use App\User;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Eugene Sinamban',
            'email' => 'eugene.sinamban@gmail.com',
            'password' => bcrypt('testtest')
        ];
        User::create($user);
    }
}
