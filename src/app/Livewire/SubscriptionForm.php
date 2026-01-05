<?php

namespace App\Livewire;

use App\Models\Subscription;
use Livewire\Component;

class SubscriptionForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscriptions,email',
    ];

    public function subscribe()
    {
        $this->validate();

        Subscription::create(['email' => $this->email]);

        session()->flash('message', 'Thank you for subscribing!');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.subscription-form');
    }
}
