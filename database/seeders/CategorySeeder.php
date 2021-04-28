<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares e Tablets',
                'slug' => Str::slug('Celulares e Tablets'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'TV, Audio e Vídeo',
                'slug' => Str::slug('TV, Audio e Vídeo'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consoles e Videogames',
                'slug' => Str::slug('Consoles e Videogames'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computação',
                'slug' => Str::slug('Computação'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ]
        ];

        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
