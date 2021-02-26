<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PageController extends Controller
{
    public function home()
    {
        $events = Event::all();

        return view('pages.home')
            ->with('events', $events);
    }

    public function about()
    {
        $alertMessage = 'This is a dangerous situation!';

        return view('pages.about')
            ->with('alertMessage', $alertMessage);
    }
}
