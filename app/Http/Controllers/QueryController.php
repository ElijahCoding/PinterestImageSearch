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
        $hits = (new Search)->search($query);

        event(new QueryTouched($query, $hits));

        return $hits;
    }
}
