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
        return "You are a professional customer support agent for our company.

        RULES:
        1. Use the 'FileSearch' tool to look up information in the company document.
        2. Answer ONLY based on the information provided in that file.
        3. If the answer is NOT found in the file, do not guess.
        4. FALLBACK: If information is missing, reply with:
           'I'm sorry, I couldn't find specific information on that. Please contact our team manually at support@company.com or call us at +1-234-567-890.'";
    }

    public function tools(): iterable
    {
        return [
            // Use the Store ID you generated in Step 1
            new FileSearch(stores: ['your_store_id_here']),
        ];
    }
}
