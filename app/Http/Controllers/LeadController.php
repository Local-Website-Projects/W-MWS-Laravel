<?php

namespace App\Http\Controllers;

use App\Models\AgentConversation;
use App\Models\AgentConversationMessage;
use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(){
        $leads = Lead::latest()->paginate(20);
        $contacts = Contact::latest()->paginate(20);
        $chats = AgentConversation::latest()->paginate(20);
        return view('dashboard', compact('leads','contacts','chats'));
    }

    public function showMessage($session_id)
    {
        $conversation = AgentConversation::with('messages')
        ->where('session_id', $session_id)
        ->firstOrFail();
    
        // Access the collection directly
        $messages = $conversation->messages;
        return view('admin.show-messages', compact('messages'));
    }
}
