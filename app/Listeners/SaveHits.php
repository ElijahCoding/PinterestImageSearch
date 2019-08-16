<?php

namespace App\Listeners;

use App\Events\QueryTouched;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveHits
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QueryTouched  $event
     * @return void
     */
    public function handle(QueryTouched $event)
    {
        //
    }
}
