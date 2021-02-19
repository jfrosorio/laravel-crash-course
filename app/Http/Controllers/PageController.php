<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function page($path)
    {
//        $data = [
//            'title' => $path,
//            'excerpt' => 'Lorem ipsum...'
//        ];
//
//        return view('page', $data);

        return view('page')
            ->with('title', $path)
            ->with('excerpt', 'This is another way of doing things...');
    }
}
