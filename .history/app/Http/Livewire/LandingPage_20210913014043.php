<?php

namespace App\Http\Livewire;

use App\Models\Subscritor;
use Livewire\Component;

class LandingPage extends Component
{
    public $email = 'test@exemplo.com';

    public function subscribe()
    {
        // \Log::debug($this->email);
        $subscritor = Subscritor::create([
            'email' => $this->email,
        ]);

        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}
