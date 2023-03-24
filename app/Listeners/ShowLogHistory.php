<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Spatie\ModelStates\Events\StateChanged;

class ShowLogHistory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StateChanged $event): void
    {
        $stateHistory ="Id" . $orderId=$event->model->id . "from" . $fromState=$event->initialState->getValue() . "to" .$toState=$event->finalState->getValue();

        Log::info($stateHistory);

    }
}
