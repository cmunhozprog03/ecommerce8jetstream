<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);

        // Recuperar todas as Subcategorias
        $subcategory = Subcategory::all()->random();

        // Recuperar todas as Subcategorias da Categoria
        $category = $subcategory->category;

        // Recuperar a marca da Categoria
        $brand = $category->brands->random();
        
        if($subcategory->color){
            $quantity = null;
        } else{
            $quantity = 15;
        }

        return [
            'brand_id' => $brand->id,
            'subcategory_id' => $subcategory->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
