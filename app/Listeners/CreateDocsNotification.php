<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;

class CreateDocsNotification
{

    /**
     * Create a new listener instance.
     *
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param Registered $event
     */
    public function handle(Registered $event)
    {
        flash("Looks like you are new here, why don't you check out the <a href='docs'>getting started guide</a>?", 'info');
    }
}
