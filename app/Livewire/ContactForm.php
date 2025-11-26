<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
class ContactForm extends Component
{
    use UsesSpamProtection;

    public $name, $phone, $email, $message, $url;
    public HoneypotData $extraFields;
    public function mount()
    {
        $this->url = url()->current();
        $this->extraFields = new HoneypotData();
    }

    public function submit()
    {
        $this->protectAgainstSpam();
        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
            'submitted_from_url' => $this->url
        ]);
        $this->reset('name', 'phone', 'email', 'message');
        session()->flash('message', 'Thanks for reaching out!');


    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
