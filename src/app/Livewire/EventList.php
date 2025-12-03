<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventList extends Component
{
    public function render()
    {
        return view('livewire.event-list',[
            'events' => Event::latest()->get(),
        ]);
    }
}
