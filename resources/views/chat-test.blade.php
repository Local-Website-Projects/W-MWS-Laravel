<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MWS Support Tester</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .chat-container { height: calc(100vh - 160px); }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="bg-slate-100 font-sans">

<div class="max-w-2xl mx-auto mt-10 px-4">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden flex flex-col h-[600px]">
        <div class="bg-blue-700 p-4 text-white flex items-center justify-between">
            <div>
                <h1 class="font-bold text-lg">MWS AI Assistant</h1>
                <p class="text-xs text-blue-100">Trained on Company Data</p>
            </div>
            <span class="bg-green-400 w-3 h-3 rounded-full animate-pulse"></span>
        </div>

        <div id="chat-box" class="flex-1 p-6 overflow-y-auto space-y-4 bg-slate-50">
            <div class="flex justify-start">
                <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-tl-none max-w-[80%] text-sm shadow-sm">
                    Hello! I am the Many Wear Sourcing assistant. How can I help you today?
                </div>
            </div>
        </div>

        <div id="typing" class="hidden px-6 py-2 text-xs text-slate-400 italic">
            MWS Assistant is thinking...
        </div>

        <form id="chat-form" class="p-4 border-t bg-white flex gap-2">
            @csrf
            <input type="text" id="user-input" autocomplete="off"
                   class="flex-1 border border-slate-200 rounded-full px-5 py-2 text-sm focus:outline-none focus:border-blue-500 transition-all"
                   placeholder="Ask about our garment services...">
            <button type="submit" class="bg-blue-700 text-white rounded-full p-2 w-10 h-10 flex items-center justify-center hover:bg-blue-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-90" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                </svg>
            </button>
        </form>
    </div>
</div>

<script>
    const form = document.getElementById('chat-form');
    const box = document.getElementById('chat-box');

    // Load history when page opens
    document.addEventListener('DOMContentLoaded', () => {
        const savedChat = localStorage.getItem('mws_chat_history');
        if (savedChat) {
            box.innerHTML = savedChat;
            box.scrollTop = box.scrollHeight;
        }
    });

    // Save history after every update
    function persist() {
        localStorage.setItem('mws_chat_history', box.innerHTML);
        box.scrollTop = box.scrollHeight;
    }

    form.onsubmit = async (e) => {
        e.preventDefault();
        const input = document.getElementById('user-input');
        const message = input.value.trim();
        if(!message) return;

        // Append User Message
        box.innerHTML += `<div class="flex justify-end"><div class="bg-white border p-3 rounded-2xl text-sm">${message}</div></div>`;
        input.value = '';
        persist();

        const response = await fetch("{{ route('chat.send') }}", {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            body: JSON.stringify({ message })
        });

        const data = await response.json();

        // Append AI Response
        box.innerHTML += `<div class="flex justify-start"><div class="bg-blue-600 text-white p-3 rounded-2xl text-sm">${data.reply}</div></div>`;
        persist();
    };
</script>
</body>
</html>
