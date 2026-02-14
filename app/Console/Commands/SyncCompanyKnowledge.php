<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Ai\Stores;
use Laravel\Ai\Files\Document;

class SyncCompanyKnowledge extends Command
{
    // This is the command you will type in the terminal
    protected $signature = 'app:sync-knowledge';
    protected $description = 'Uploads company_info.txt to the AI Vector Store';

    public function handle()
    {
        $this->info('Starting upload to AI provider...');

        // 1. Create or get the store
        $store = Stores::create('Company Knowledge');

        // 2. Upload the file
        $store->add(Document::fromStorage('company_info.txt'));

        $this->info('Success! File uploaded and vectorized.');

        // 3. THIS IS THE ID YOU NEED FOR YOUR AGENT
        $this->warn("Your Store ID is: " . $store->id);
        $this->info("Copy this ID and paste it into your CompanySupport agent class.");
    }
}
