<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        $alertMessage = 'This is a dangerous situation!';

        return view('pages.about')
            ->with('alertMessage', $alertMessage);
    }

    public function events()
    {
        $events = Event::all();

        return view('pages.events')
            ->with('events', $events);
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
