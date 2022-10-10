<?php

namespace App\Models;

use App\Models\User;
use App\Models\ChatRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_room_id',
        'user_id',
        'message',
    ];

    // belongsTo relationship with ChatRoom
    public function chatRoom()
    {
        return $this->belongsTo(ChatRoom::class, 'chat_room_id', 'id');
    }

    // belongsTo relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
