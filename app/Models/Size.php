<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    // Reverse One -> Many

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    // Many -> Many
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
