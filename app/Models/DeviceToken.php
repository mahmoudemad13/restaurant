<?php

namespace App;

use App\Models\Auth\Member\Member;
use Illuminate\Database\Eloquent\Model;

class DeviceToken extends Model
{
    protected $table = 'fcm_tokens';

    protected $fillable = ['token','device','member_id'];

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }


}
