<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\Twitter;

class EventShow extends Component
{
    public $event;

    public function mount($slug)
    {
        $this->event = Event::where('slug', $slug)->firstOrFail();

        // SEO Title & Description
        SEOMeta::setTitle($this->event->title);
        SEOMeta::setDescription(str()->limit($this->event->description, 150));

        // OpenGraph
        OpenGraph::setTitle($this->event->title);
        OpenGraph::setDescription(str()->limit($this->event->description, 150));
        OpenGraph::addImage(asset('storage/' . $this->event->photo));

        // Twitter Card
        Twitter::setTitle($this->event->title);
        Twitter::setDescription(str()->limit($this->event->description, 150));
        Twitter::setImage(asset('storage/' . $this->event->photo));
    }

    public function render()
    {
        return view('livewire.event-show');
    }
}
