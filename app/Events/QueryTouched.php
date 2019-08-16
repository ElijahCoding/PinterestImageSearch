<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class QueryTouched
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $query;

    public $hits;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($query, $hits)
    {
        $this->query = $query;
        $this->hits = $hits;
    }
}
