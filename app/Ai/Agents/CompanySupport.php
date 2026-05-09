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
        Identity: You are the Lead Merchandiser for MWS.
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

        Do not use Markdown formatting (e.g., no bold ** or italics). When listing items or starting a new topic, use double newlines (\n\n) to create clear 
        paragraph breaks. For lists, use simple bullet points like '- ' instead of formatting.

        CRITICAL: When you call the 'save_lead_to_db' tool:
        - Use the 'session_id' value provided in your current conversation metadata.
        - If it is not explicitly provided in the latest message, look for it in the conversation context.
        ";
    }

    public function tools(): iterable
    {
        return [
            // Keep your existing knowledge base
            new FileSearch(stores: ['vs_69e9ccc2fb5881918d10624f65eceb22']),
            
            // Add the new lead saving tool
            new SaveLead(), 
        ];
    }
}
