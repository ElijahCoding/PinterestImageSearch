<?php

namespace App\Models;

use App\Models\Query;
use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    protected $guarded = [];

    public function query()
    {
        return $this->belongsTo(Query::class);
    }
}
