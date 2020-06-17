<?php

namespace App\Models\Categories;

use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Category extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.categories';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}


