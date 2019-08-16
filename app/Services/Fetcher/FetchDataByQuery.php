<?php

namespace App\Services\Fetcher;

use App\Services\Fetcher\FetchHits;

class FetchDataByQuery
{
    public function fetch()
    {
        if ($query = auth()->user()->queries()->lastQuery()->first()->name) {
            return [
                'query' => $query,
                'hits' => (new FetchHits($query))->hits()
            ];
        } else {
            return [
                'message' => 'no data.'
            ];
        }
    }
}
