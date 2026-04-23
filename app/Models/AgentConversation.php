<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class AgentConversation extends Model
{
    protected $fillable = [
        'id',
        'session_id',
        'user_id', // Add this
        'title',   // Add this
        'metadata',
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    protected $casts = [
        'metadata' => 'array',
    ];

    protected static function boot()
{
    parent::boot();
    
    static::creating(function ($model) {
        if (empty($model->id)) {
            $model->id = (string) \Illuminate\Support\Str::uuid();
        }
        
        // Add this line to provide a default if none is provided
        if (empty($model->user_id)) {
            $model->user_id = 0; // Use 0 or another placeholder for guests
        }
    });
}

    public function messages(): HasMany
    {
        return $this->hasMany(AgentConversationMessage::class, 'conversation_id');
    }
}