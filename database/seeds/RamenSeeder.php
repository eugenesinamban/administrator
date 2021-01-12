<?php

use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Seeder;

class RamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = Type::where('text', 'ramen')->get()->first();
        $array = [
            [
                'text' => 'Sugakiya',
                'slug' => 'sugakiya',
                'description' => 'Popular ramen from Nagoya, now available as instant ramen in cup or packs.',
            ],
            [
                'text' => 'Yarou',
                'slug' => 'yarou',
                'description' => 'Ramen chain that is quite popular with the younger crowd because of the volume of their servings. Not for the faint of heart!',
            ],
            [
                'text' => 'Ichiran',
                'slug' => 'ichiran',
                'description' => 'Ichiran, arguably the most popular Ramen chain, even known outside Japan. Their 1 person booth really catches the hearts of people who loves to eat alone, or just needs some alone time.',
            ],
            [
                'text' => 'Menyasho',
                'slug' => 'menyasho',
                'description' => 'A small ramen shop located in Nishi-Shinjuku, famous for their Shio Ramen.',
            ],
            [
                'text' => 'Ippudou',
                'slug' => 'ippudou',
                'description' => "A famous chain ramen shop famous for their tonkotsu ramen. It's so famous, they have stores all over the world.",
            ],
            [
                'text' => 'Tsuta',
                'slug' => 'tsuta',
                'description' => 'The only ramen shop in Japan with the most Michellin star. They also have instant cup noodles sold in 7-11s all over Japan.',
            ],
            [
                'text' => 'Abura Gumi',
                'slug' => 'aburagumi',
                'description' => 'No soup ramen which was made popular in Nagoya, and how has stores all around Tokyo',
            ],
        ];
        foreach ($array as $item) {
            Product::create([
                    'type_id' => $type->id,
                    'text' => $item['text'],
                    'slug' => $item['slug'],
                    'description' => $item['description'],
                    'image_url' => null,
                    'likes' => 0
                ]);
        }
    }
}
