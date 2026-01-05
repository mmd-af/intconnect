<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $identifier;
    public $description;

    protected $rules = [
        'name' => 'required|min:3',
        'identifier' => 'required|string',
        'description' => 'required|min:10',
    ];

    public function submitForm()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'identifier' => $this->identifier,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Your message has been sent successfully!');

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->identifier = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
