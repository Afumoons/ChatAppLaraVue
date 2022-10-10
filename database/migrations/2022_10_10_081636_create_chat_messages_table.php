<?php

use App\Models\User;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            // foreign id for ChatRoom
            $table->foreignIdFor(ChatRoom::class, 'chat_room_id')->constrained('chat_rooms')->cascadeOnDelete()->cascadeOnUpdate();
            // foreign id for User
            $table->foreignIdFor(User::class, 'user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
};
