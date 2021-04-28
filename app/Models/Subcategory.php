<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // One -> Many
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Reverse One -> Many
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
