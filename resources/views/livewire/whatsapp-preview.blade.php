{{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-lg shadow-md p-6 max-w-md w-full">
        <h2 class="text-2xl font-bold mb-4 text-center">Live Preview WhatsApp</h2>

        <div class="flex flex-col space-y-4">
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">
                    Unggah Gambar
                </label>
                <input type="file" id="image" wire:model="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">
                    Pesan
                </label>
                <textarea id="message" wire:model="message" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" rows="3"></textarea>
                @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-6">
            <div class="flex justify-center">
                <div class="w-full max-w-sm bg-gray-200 rounded-lg shadow-md p-4">
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="w-full rounded-lg">
                    @endif
                    <div class="mt-2 text-gray-600 text-center">
                        {{ $message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>