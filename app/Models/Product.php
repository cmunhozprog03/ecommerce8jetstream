<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // One -> Many
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }


    // Reverse One -> Many
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Many -> Manay
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    // One -> Many - Morph
    public function images()
    {
        return $this->morphToMany(Image::class, "imageable");
    }


}
