<?php

namespace App\Services\Fetcher;

use App\Services\Fetcher\FetchHits;

class FetchDataByQuery
{
    public function fetch()
    {
        if ($query = auth()->user()->queries()->lastQuery()->first()) {
            if ($query) {
                return [
                    'query' => $query->name,
                    'hits' => (new FetchHits($query->name))->hits()
                ];
            }
        }
    }
}
