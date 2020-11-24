<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['ramen'];
        foreach ($types as $type) {
            Type::create(['text' => $type]);
        }
    }
}
