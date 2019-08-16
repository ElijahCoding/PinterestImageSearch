<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Pixabay\Search;

class QueryController extends Controller
{
    public function __construct()
    {

    }

    public function store(Request $request)
    {
        (new Search)->search($request->get('query'));
        // return auth()->user()->queries()->create([
        //     'name' => $request->get('query')
        // ]);
    }
}
