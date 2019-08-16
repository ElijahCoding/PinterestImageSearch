<?php

namespace App\Services\Pixabay;

use App\Services\Pixabay\PixabayAbstract;

class Search extends PixabayAbstract
{
    public function search($query)
    {
        return $this->client->get(['q' => $query], true)['hits'];
    }
}
