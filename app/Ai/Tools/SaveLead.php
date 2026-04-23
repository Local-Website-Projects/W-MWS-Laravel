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
        return 'Saves the customer name and email to our database for a merchandiser follow-up.';
    }

    /**
     * Define the tool input schema for the AI provider.
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
        ];
    }

    /**
     * Handle the tool execution.
     */
    public function handle(Request $request): Stringable|string
    {
        $name = $request['name'] ?? null;
        $email = $request['email'] ?? null;

        if (! $name || ! $email) {
            return 'Missing name or email. Lead was not saved.';
        }

        Lead::updateOrCreate(['email' => $email], ['name' => $name]);

        return 'Lead saved successfully. A merchandiser will contact you soon.';
    }
}