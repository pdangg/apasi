<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class WhatsappPreview extends Component
{
    use WithFileUploads;
    public $image = null;
    public $message = '';
    public $file;


    public function uploadFile()
    {
        // Handle the file upload logic here
        //...
    }
    
    public function render()
    {
        return view('livewire.whatsapp-preview');
    }
}