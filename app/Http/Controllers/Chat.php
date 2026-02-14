<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai\Agents\CompanySupport;

class Chat extends Controller
{
    public function chat(Request $request)
    {
        $bot = new CompanySupport();

        // The AI will first search the file, then decide to answer or use your fallback message
        return $bot->prompt($request->input('message'));
    }
}
