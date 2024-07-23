<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MessagePreview extends Component
{
    use WithFileUploads;

    public $image;
    public $message = '';
    public $showButton = false;
    public $buttonText = '';
    public $buttonUrl = '';
    public $customError = '';

    protected $rules = [
        'image' => 'nullable|image|mimes:jpg,jpeg,png,heic|max:1024', // Validasi file yang diizinkan dan ukuran maksimal 1MB
        'message' => 'string|max:1000',
        'showButton' => 'required|boolean',
        'buttonText' => 'string|max:255',
        'buttonUrl' => 'string|max:255|url', // Validasi bahwa URL harus valid
    ];

    public function updated($propertyName)
    {
        $this->resetErrorBag($propertyName); // Reset error bag untuk properti yang diperbarui
        $this->customError = ''; // Reset pesan kesalahan kustom

        try {
            $this->validateOnly($propertyName);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($propertyName == 'image') {
                $this->customError = 'Mohon maaf, file yang dapat diupload hanya gambar.';
            }
        }
    }

    public function addName()
    {
        $this->message .= ' {{ nama }}';
        // Tambahkan log untuk debugging
        logger('Message updated:', ['message' => $this->message]);
    }

    public function render()
    {
        return view('livewire.message-preview');
    }
}