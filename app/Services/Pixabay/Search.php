<?php

namespace App\Services\Pixabay;

use App\Services\Pixabay\GuzzleAbstract;

class Search extends GuzzleAbstract
{
    public function search($query)
    {
        $results = $this->client->get(['q' => 'nature'], true);

        
        // if (json_decode($response->getBody()) === null) {
        //     return null;
        // } else {
        //     dd(json_decode($response->getBody()));
        //     // return json_decode($response->getBody());
        // }
    }
}
