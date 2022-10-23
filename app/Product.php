<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
        'model', 'brand', 'category_id', 'subcategory_id', 'color_id', 'quantity', 'price', 'release', 'details',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function Color()
    {
        return $this->belongsTo(Color::class);
    }

    public function Offer()
    {
        return $this->hasMany(Offer::class);
    }
}
