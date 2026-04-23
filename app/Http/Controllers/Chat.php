<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai\Agents\CompanySupport;

class Chat extends Controller
{
    public function index() {
        return view('chat-test');
    }

    // App/Http/Controllers/Chat.php

// App/Http/Controllers/Chat.php

public function chat(Request $request) {
    $request->validate(['message' => 'required', 'session_id' => 'required']);

    // Add 'title' to the array
    $conversation = \App\Models\AgentConversation::firstOrCreate(
        ['session_id' => $request->session_id],
        [
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'user_id' => 0, // Using 0 for guests
            'title' => 'New Guest Conversation' // Required field
        ]
    );

    // Save User Message
    $conversation->messages()->create([
        'role' => 'user',
        'content' => $request->message
    ]);

    // Process with AI
    $bot = new \App\Ai\Agents\CompanySupport();
    $response = $bot->prompt($request->message);

    // Save AI Response
    $conversation->messages()->create([
        'role' => 'assistant',
        'content' => (string) $response
    ]);

    return response()->json(['reply' => (string) $response]);
}
}
