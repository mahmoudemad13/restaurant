<?php

namespace App\Models\Stores;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Store extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.stores';
}


