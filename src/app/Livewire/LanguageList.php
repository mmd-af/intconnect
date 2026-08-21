<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Language;

class LanguageList extends Component
{
    public function render()
    {
        return view('livewire.language-list', [
            'languages' => Language::latest()->get(),
        ]);
    }
}
