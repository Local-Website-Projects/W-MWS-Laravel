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
        $request->validate(['message' => 'required']);

        $bot = new CompanySupport();
        $response = $bot->prompt($request->input('message'));

        return response()->json(['reply' => (string) $response]);
    }
}
