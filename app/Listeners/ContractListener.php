<?php

namespace App\Listeners;

use App\Events\ContractEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContractListener
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
     * @param  ContractEvent  $event
     * @return void
     */
    public function handle(ContractEvent $event)
    {
        //
    }
}
