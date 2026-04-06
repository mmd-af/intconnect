<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class GalleryList extends Component
{
    public function render()
    {
        return view('livewire.gallery-list', [
            'galleries' => Gallery::latest()->get(),
        ]);
    }
}
