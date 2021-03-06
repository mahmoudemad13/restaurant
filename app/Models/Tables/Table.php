<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Table extends Model
{
    use HasRoute;

    protected $fillable = ['available'];

    protected $routeName = 'admin.tables';
}


