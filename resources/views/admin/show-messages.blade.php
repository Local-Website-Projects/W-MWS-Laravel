<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Conversation') }}
        </h2>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-6 shadow sm:rounded-lg">
                    <h3 class="font-bold mb-6">Conversation History</h3>
                    
                    <div class="space-y-4">
                        @foreach ($messages as $message)
                            {{-- Determine alignment: 'user' on left, 'ai' on right --}}
                            <div class="flex {{ $message->role === 'user' ? 'justify-start' : 'justify-end' }}">
                                
                                <div style="margin-top:10px;" class="max-w-xs px-4 py-2 rounded-lg 
                                    {{ $message->role === 'user' 
                                        ? 'bg-gray-200 text-gray-800' 
                                        : 'bg-gray-800 text-white' }}"> 
                                        <p class="text-sm">{{ $message->content }}</p>
                                        <span class="text-[10px] block mt-1 {{ $message->role === 'user' ? 'text-gray-500' : 'text-blue-100' }}">
                                            {{ $message->created_at->format('H:i') }}
                                        </span>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    
</x-app-layout>
