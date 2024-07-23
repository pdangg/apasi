<div class="flex" x-data="{ 
    message: @entangle('message').defer, 
    error: '', 
    getPreviewMessage() {
        console.log('Current message:', this.message); // Log untuk memastikan message ada
        return this.message ? this.message.replace(/\{\{\s*nama\s*\}\}/g, 'Jennie') : '';
    }
}">
    <div class="w-1/2 p-4">
        <form>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                <button type="button" wire:click="addName" @click="console.log('Button clicked:', message)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">Jennie</button>
    <textarea id="message" x-model="message" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                <input type="file" id="image" wire:model="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <div x-show="error" class="text-red-500 mt-2" x-text="error"></div>
                @if ($customError)
                    <span class="text-red-500">{{ $customError }}</span>
                @else
                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                @endif
            </div>
        </form>
    </div>
    <div class="w-1/2 p-4">
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-cover h-96" style="background-image: url('{{ $image ? $image->temporaryUrl() : asset('assets/default.jpg') }}')"></div>
            <div class="p-4">
                <h1 class="text-gray-900 font-bold text-2xl" style="white-space: pre-wrap;" x-text="getPreviewMessage()"></h1>
                <p class="mt-2 text-gray-600">Your Preview</p>
            </div>
        </div>
    </div>
</div>
