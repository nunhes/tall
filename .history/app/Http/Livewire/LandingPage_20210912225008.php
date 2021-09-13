<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public function subscribe()
    {
        \Log::debug(1111);
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}
