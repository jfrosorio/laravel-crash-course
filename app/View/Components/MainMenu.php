<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainMenu extends Component
{
    public $menuItems;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menuItems = [
            [
                'link' => route('home'),
                'name' => 'Homepage',
            ],
            [
                'link' => route('about-us'),
                'name' => 'About us',
            ],
            [
                'link' => route('events'),
                'name' => 'Events',
            ],
            [
                'link' => route('contacts'),
                'name' => 'Contacts',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.main-menu');
    }
}
