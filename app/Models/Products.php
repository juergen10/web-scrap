<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['Name', 'Price', 'ImageLink', 'CreatedAt'];

    public function path()
    {
        return "/products/{$this->ID}";
    }
}
