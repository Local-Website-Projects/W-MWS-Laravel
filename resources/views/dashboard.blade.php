<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Collected Leads</h3>
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Sl</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Date</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Messages</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">
                                        {{ ($leads->firstItem() ?? 1) + $loop->index }}
                                    </td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $lead->name }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $lead->email }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $lead->created_at->format('M d, Y') }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">
                                        <a href="{{ route('messages.show', $lead->session_id) }}" class="text-blue-600 hover:text-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $leads->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Collected Contact Form Data</h3>
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Sl</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">
                                        {{ ($contacts->firstItem() ?? 1) + $loop->index }}
                                    </td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $contact->name }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $contact->email }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $contact->message }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $contact->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $leads->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">AI Chat History</h3>
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Sl</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Session ID</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Date</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700 border border-gray-300">Messages</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chats as $chat)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">
                                        {{ ($chats->firstItem() ?? 1) + $loop->index }}
                                    </td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $chat->session_id }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">{{ $chat->created_at->format('M d, Y') }}</td>
                                    <td class="py-3 px-4 text-left text-sm text-gray-800 border border-gray-300">
                                        <a href="{{ route('messages.show', $chat->session_id) }}" class="text-blue-600 hover:text-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $leads->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
