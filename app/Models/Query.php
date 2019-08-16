<?php

namespace App\Models;

use App\Models\{User, Hit};
use Illuminate\Database\Eloquent\{Model, Builder};

class Query extends Model
{
    protected $guarded = [];

    public function scopeLastQuery(Builder $builder)
    {
        return $builder->orderBy('created_at', 'desc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hits()
    {
        return $this->hasMany(Hit::class);
    }
}
