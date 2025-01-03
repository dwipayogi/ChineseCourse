<div class="flex flex-col max-w-7xl m-auto">
    <h1 class="text-2xl font-bold text-center py-8">Chatbot</h1>

    <!-- Chat History -->
    <div class="flex-1 overflow-y-auto p-4" id="chatbox">
        @foreach($chatHistory as $chat)
            <div class="mb-2 flex {{ $chat['user'] == 'You' ? 'justify-end' : 'justify-start' }}">
                <div class="rounded-lg p-3 max-w-xs {{ $chat['user'] == 'You' ? 'bg-purple-500 text-white' : 'bg-purple-300 text-white' }}">
                    <p class="text-sm">{{ $chat['message'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Input Field -->
    <div class="bg-white p-4 flex items-center">
        <input 
            type="text" 
            wire:model="message" 
            wire:keydown.enter="sendMessage" 
            placeholder="Type a message..." 
            class="flex-1 border rounded-md px-4 py-2 text-sm focus:outline-none focus:ring focus:ring-purple-500"
        >
        <button 
            wire:click="sendMessage" 
            class="ml-2 bg-purple-500 hover:bg-purple-700 text-white px-4 py-2 rounded-md">
            Kirim
        </button>
    </div>
</div>