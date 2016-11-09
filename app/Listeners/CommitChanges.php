<?php

namespace App\Listeners;

use App\Events\DocsChanged;

class CommitChanges
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
     * @param  DocsChanged  $event
     * @return void
     */
    public function handle(DocsChanged $event)
    {
        // Access the page using $event->page;
        $old_path = getcwd();
        chdir('../build/');
        $output = shell_exec("./commit.sh $event->page");
        chdir($old_path);

        return $output;
    }
}
