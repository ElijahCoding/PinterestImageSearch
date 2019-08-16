<?php

namespace App\Http\Controllers;

use App\Events\QueryTouched;
use Illuminate\Http\Request;
use App\Services\Pixabay\Search;

class QueryController extends Controller
{
    public function store(Request $request)
    {
        $query = $request->get('query');
        $data = (new Search)->search($query);

        event(new QueryTouched($query, $data['hits']));

        return $data;
    }
}
