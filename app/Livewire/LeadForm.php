<?php

namespace App\Livewire;

use App\Models\LeadCaptureForm;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

class LeadForm extends Component
{
    use UsesSpamProtection;

    public $name;

    public $phone;

    public $email;

    public $message;

    public $lead_capture_id;

    public HoneypotData $extraFields;

    public function mount($lead_capture_id)
    {
        $this->lead_capture_id = $lead_capture_id;
        $this->extraFields = new HoneypotData;
    }

    public function submit()
    {
        $this->protectAgainstSpam();
        LeadCaptureForm::create([
            'lead_capture_id' => $this->lead_capture_id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->reset('name', 'phone', 'email', 'message');
        session()->flash('message', 'Thanks for reaching out!');

    }

    public function render()
    {
        return view('livewire.lead-form');
    }
}
