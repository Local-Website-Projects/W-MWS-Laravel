<?php
namespace App\Ai\Agents;

use App\Ai\Tools\SaveLead;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;
use Laravel\Ai\Providers\Tools\FileSearch;

class CompanySupport implements Agent, HasTools
{
    use Promptable;

    public function instructions(): string
    {
        return "
        Identity: You are the Lead Merchandiser for Many Wear Sourcing (MWS).
        Tone: Friendly, business-minded, and solution-oriented.
        Strategy: 
        1. Use 'FileSearch' to answer product/service questions. 
        2. If a user asks about price, MOQ, or samples, provide a helpful answer and ALWAYS ask for their Name and Email to provide a formal quote.
        3. Once you have both a Name and Email, you MUST use the 'save_lead_to_db' tool.
        4. Ask only 1-2 questions at a time.
        
        Specific Responses:
        - Price: Explain it depends on fabric/GSM. Ask for their target price.
        - MOQ: Mention flexibility for trial orders (usually 800-1000 pcs).
        - Not Found: If info is missing, say: 'I'm sorry, please contact our team at support@mwsbd.net.'
        ";
    }

    public function tools(): iterable
    {
        return [
            // Keep your existing knowledge base
            new FileSearch(stores: ['fileSearchStores/company-knowledge-swwwhrrwow1d']),
            
            // Add the new lead saving tool
            new SaveLead(), 
        ];
    }
}
