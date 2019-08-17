<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Fetcher\FetchDataByQuery;

class ExistingQueryController extends Controller
{
    public function index()
    {
        $data = (new FetchDataByQuery)->fetch();
    }
}
