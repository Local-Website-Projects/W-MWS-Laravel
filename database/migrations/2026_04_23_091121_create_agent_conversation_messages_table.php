<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // FORCE drop it first if it exists, then create it
        Schema::dropIfExists('agent_conversation_messages');

        Schema::create('agent_conversation_messages', function (Blueprint $table) {
            $table->id();
            // This links the message to the conversation created by your existing migration
            $table->foreignUuid('conversation_id')->constrained('agent_conversations')->onDelete('cascade');
            $table->string('role'); // Stores 'user' or 'assistant'
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_conversation_messages');
    }
};