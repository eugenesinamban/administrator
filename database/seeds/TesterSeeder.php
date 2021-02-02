<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class TesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('testtest')
        ];

        $user = User::create($data);
        $user->assignRole('admin');

        $data = [
            'name' => 'Annotator',
            'email' => 'annotator@annotator.com',
            'password' => bcrypt('testtest')
        ];
        $user = User::create($data);
        $user->assignRole('annotator');
    }
}
