{{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}


<div class="flex justify-center p-4">
    <div class="w-1/2 p-4">
        <form wire:submit.prevent>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Upload Image</label>
                <input type="file" id="image" wire:model.lazy="image" class="block mt-1">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea id="message" wire:model.lazy="message" rows="4" class="block mt-1 w-full"></textarea>
            </div>
        </form>
    </div>
    <div class="w-1/2 p-4">
        <div class="border rounded p-4 bg-gray-100">
            @if ($tempImageUrl)
                <img src="{{ $tempImageUrl }}" alt="Image Preview" class="mb-4 w-full h-auto">
            @endif
            <p>{{ $message }}</p>
        </div>
    </div>
</div>
