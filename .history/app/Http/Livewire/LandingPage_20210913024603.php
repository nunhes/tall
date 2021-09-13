<?php

namespace App\Http\Livewire;

use App\Models\Subscritor;
use Livewire\Component;

class LandingPage extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email:filter|unique:subscritors,email',
    ];

    public function subscribe()
    {
        $this->validate();

        DB::transaction(function () {
            $subscritor = Subscritor::create([
                'email' => $this->email,
            ]);

            $notification = new VerifyEmail;

            $subscritor->notify($notification);
        }, $deadlockRestries = 5);

        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}
