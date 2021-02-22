<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $includeNews = true;

        $test = 'test';

        return view('pages.home')
            ->with('includeNews', $includeNews)
            ->with('test', $test);
    }

    public function about()
    {
        $alertMessage = 'This is a dangerous situation!';

        return view('pages.about')
            ->with('alertMessage', $alertMessage);
    }
}
