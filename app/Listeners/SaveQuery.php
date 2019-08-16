<?php

namespace App\Listeners;

use App\Models\Query;
use App\Events\QueryTouched;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveQuery
{
    /**
     * Handle the event.
     *
     * @param  QueryTouched  $event
     * @return void
     */
    public function handle(QueryTouched $event)
    {
        auth()->user()->queries()->create([
            'name' => $event->query
        ]);
    }
}
