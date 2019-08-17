<?php

namespace App\Listeners;

use App\Models\Query;
use App\Events\QueryTouched;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveQueryAndHits
{
    /**
     * Handle the event.
     *
     * @param  QueryTouched  $event
     * @return void
     */
    public function handle(QueryTouched $event)
    {
        $query = auth()->user()->queries()->create([
            'name' => $event->query
        ]);

        foreach ($event->hits as $hit) {
            $query->fresh()->hits()->create([
                'pageURL' => $hit['pageURL'],
                'largeImageURL' => $hit['largeImageURL'],
                'tags' => $hit['tags']
            ]);
        }
    }
}
