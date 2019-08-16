<?php

namespace App\Services\Fetcher;

class FetchLastQuery
{
    public function lastQuery()
    {
        return optional(auth()->user()->queries()->lastQuery()->first())->name;
    }
}
