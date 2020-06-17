<?php

namespace App\Models\Waiters;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Waiter extends Model
{
    use HasRoute;

    protected $fillable = ['user_id'];

    protected $routeName = 'admin.waiters';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


