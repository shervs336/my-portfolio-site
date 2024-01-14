<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\MessageSent;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $email, $company, $message, $name, $phone, $messageSent = false, $errorMessage = '';

    public function render()
    {
        return view('livewire.contact');
    }

    public function resetFields(){
        $this->email = '';
        $this->company = '';
        $this->message = '';
        $this->name = '';
        $this->phone = '';
    }

    public function sendMessage()
    {
        $this->errorMessage = '';
        try {
            Mail::to($this->email)->send(new MessageSent($this));
            $this->messageSent = true;
            $this->resetFields();
        } catch (\Exception $e) {
            $this->messageSent = false;
            $this->errorMessage = $e->getMessage();
        }
       
    }

    public function sendNewMessage()
    {
        $this->messageSent = false;
    }
}
