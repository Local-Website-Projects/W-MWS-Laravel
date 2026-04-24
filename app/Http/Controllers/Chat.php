<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai\Agents\CompanySupport;

class Chat extends Controller
{
    public function index() {
        return view('chat-test');
    }

    public function chat(Request $request) {
        $request->validate(['message' => 'required', 'session_id' => 'required']);
    
        // 1. Get or create the conversation
        $conversation = \App\Models\AgentConversation::firstOrCreate(
            ['session_id' => $request->session_id],
            ['title' => 'Guest Conversation']
        );
    
        // 2. Load previous messages
        $history = $conversation->messages()
            ->orderBy('created_at', 'asc')
            ->get();
    
        // 3. Save User Message to your custom table
        $conversation->messages()->create([
            'role' => 'user', 
            'content' => $request->message
        ]);
    
        // 4. Manually build the history string for the AI
        $historyContext = "";
        foreach ($history as $msg) {
            $historyContext .= ucfirst($msg->role) . ": " . $msg->content . "\n";
        }
    
        $bot = new \App\Ai\Agents\CompanySupport();
        
        // 5. Inject history AND session_id directly into the prompt
        // This forces the AI to see the history regardless of the package version
        $fullPrompt = "
        CONVERSATION HISTORY:
        {$historyContext}
        
        CURRENT SESSION ID: {$request->session_id}
        
        USER MESSAGE: {$request->message}
        ";
    
        $response = $bot->prompt($fullPrompt);
        
        // 6. Save AI Response
        $conversation->messages()->create([
            'role' => 'assistant', 
            'content' => (string) $response
        ]);
    
        return response()->json(['reply' => (string) $response]);
    }
}
