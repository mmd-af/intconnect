<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Slider;

class SliderList extends Component
{
    public function render()
    {
        return view('livewire.slider-list',[
            'sliders' => Slider::latest()->get(),
        ]);
    }
}
