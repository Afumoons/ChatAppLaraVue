<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // hasMany relationship with ChatMessage
    public function chatMessages()
    {
        return $this->hasMany(ChatMessage::class, 'chat_room_id', 'id');
    }
}
