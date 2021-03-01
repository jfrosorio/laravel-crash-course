<?php

namespace App\View\Composers;

use App\Models\Event;
use Illuminate\View\View;

class EventsHighlightsComposer
{
    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view)
    {
        $events = Event::where('highlighted', true)->get();

        $view->with('events', $events);
    }
}
