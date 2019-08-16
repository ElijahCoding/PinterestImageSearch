<?php

namespace App\Models;

use App\Models\{User, Hit};
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hits()
    {
        return $this->hasMany(Hit::class);
    }
}
