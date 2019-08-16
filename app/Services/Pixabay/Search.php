<?php

namespace App\Services\Pixabay;

use App\Services\Pixabay\GuzzleAbstract;

class Search extends GuzzleAbstract
{
    public function search($query)
    {
        return $this->client->get(['q' => $query], true);
    }
}
