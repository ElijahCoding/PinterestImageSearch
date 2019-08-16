<?php

namespace App\Services\Pixabay;

use Pixabay\PixabayClient;

abstract class PixabayAbstract
{
    protected $client;

    public function __construct()
    {
        $this->client = new PixabayClient([
            'key' => config('services.pixabay.token')
        ]);
    }
}
