<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;
use Laravel\Ai\Providers\Tools\FileSearch;

class CompanySupport implements Agent, HasTools
{
    use Promptable;

    public function instructions(): string
    {
        return "You are a professional customer support agent for Many Wear Sourcing (MWS).
        Use the 'FileSearch' tool to look up information in the company document.
        Answer ONLY based on the information provided in that file.
        If the answer is NOT found, reply with: 'I'm sorry, please contact our team at support@mwsbd.net.'";
    }

    public function tools(): iterable
    {
        return [
            // Ensure this Store ID matches your latest Gemini upload
            new FileSearch(stores: ['fileSearchStores/company-knowledge-swwwhrrwow1d']),
        ];
    }
}
