<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
