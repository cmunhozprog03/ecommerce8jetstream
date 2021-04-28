<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares e Tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares e Smartfones',
                'slug' => Str::slug('Celulares e Smartfones'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Acessórios para celulares',
                'slug' => Str::slug('Acessórios para celulares'),
             ],
            [
                'category_id' => 1,
                'name' => 'Smartwatchers',
                'slug' => Str::slug('Smartwatchers'),
                'color' => true,
            ],

            /* TV e Audio */
            [
                'category_id' => 2,
                'name' => 'TV e Audio',
                'slug' => Str::slug('TV e Audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],

            /*Consoles e Videogames*/
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],
            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],
            [
                'category_id' => 3,
                'name' => 'Jogos para PC',
                'slug' => Str::slug('Jogos para PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],
            /* Computação */
            [
                'category_id' => 4,
                'name' => 'Portateis',
                'slug' => Str::slug('Portateis'),
            ],
            [
                'category_id' => 4,
                'name' => 'Decktop',
                'slug' => Str::slug('Decktop'),
            ],
            [
                'category_id' => 4,
                'name' => 'Armazenamentos',
                'slug' => Str::slug('Armazenamentos'),
            ],
            [
                'category_id' => 4,
                'name' => 'Acessórios para computadores',
                'slug' => Str::slug('Acessórios para computadores'),
            ],

            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Feminina',
                'slug' => Str::slug('Feminina'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Masculina',
                'slug' => Str::slug('Masculina'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Óculos',
                'slug' => Str::slug('Óculos'),
            ],
            [
                'category_id' => 5,
                'name' => 'Relógios',
                'slug' => Str::slug('Relógios'),
            ],
        ];

        foreach($subcategories as $subcategory)
        {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
