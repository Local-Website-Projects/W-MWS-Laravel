<?php

namespace App\Ai\Tools;

use App\Models\Lead;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Stringable;

class SaveLead implements Tool
{
    public function name(): string
    {
        return 'save_lead_to_db';
    }

    public function description(): string
    {
        return 'Saves the customer name, email, and session ID to our database for a merchandiser follow-up.';
    }

    /**
     * Define the tool input schema.
     */ 
    public function schema(JsonSchema $schema): array
    {
        return [
            'name' => $schema->string()
                ->required()
                ->description('Full name of the customer lead.'),

            'email' => $schema->string()
                ->required()
                ->description('Email address of the customer lead.'),
            
            // Add session_id to the schema so the AI knows to include it
            'session_id' => $schema->string()
                ->required()
                ->description('The unique session ID from the current chat thread.'),
        ];
    }

    /**
     * Handle the tool execution.
     */
    public function handle(Request $request): Stringable|string
    {
        $name = $request['name'] ?? null;
        $email = $request['email'] ?? null;
        $sessionId = $request['session_id'] ?? null;

        if (! $name || ! $email || ! $sessionId) {
            return 'Missing name, email, or session ID. Lead was not saved.';
        }

        // Update or create with the session_id
        Lead::updateOrCreate(
            ['email' => $email], 
            [
                'name' => $name,
                'session_id' => $sessionId
            ]
        );

        return 'Lead saved successfully. A merchandiser will contact you soon.';
    }
}