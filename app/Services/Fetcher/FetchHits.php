<?php

namespace App\Services\Fetcher;

use App\Models\Query;

class FetchHits
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function hits()
    {
        return Query::whereName($this->query)->first()->hits()->get();
    }
}
