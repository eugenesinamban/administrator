<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(DevSeeder::class);
        $this->call(TesterSeeder::class);
    }
}
