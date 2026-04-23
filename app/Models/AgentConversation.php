<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class AgentConversation extends Model
{
    protected $fillable = [
        'id', // UUID
        'session_id',
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
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function messages(): HasMany
    {
        return $this->hasMany(AgentConversationMessage::class, 'conversation_id');
    }
}