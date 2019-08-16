<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Pixabay\Search;

class QueryController extends Controller
{
    public function store(Request $request)
    {
        $hits = (new Search)->search($request->get('query'));

        // dispatch();

        return $hits;
    }
}
