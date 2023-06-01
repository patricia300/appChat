<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateChatController extends Controller
{

    /**
     * @Param int $id
     * Store a newly created resource in storage.
     */
    public function store(int $receiverId)
    {
        $currentUserId = Auth::id();

        $checkedConversation = Conversation::where('receiver_id', $currentUserId)
                                            ->where('sender_id', $receiverId)
                                            ->orWhere('receiver_id', $receiverId)
                                            ->where('sender_id', $currentUserId)
                                            ->get();

        if(count($checkedConversation) == 0) {
            $createdConversation = Conversation::create([
                'receiver_id' => $receiverId,
                'sender_id' => $currentUserId,
                'last_time_message' => null
            ]);

            $createdMessage = Message::create([
                'conversation_id' => $createdConversation->id,
                'receiver_id' => $receiverId,
                'sender_id' => $currentUserId,
                'body' => 'Hi, How are you'
            ]);

            $createdConversation->last_time_message = $createdMessage->created_at;
            $createdConversation->save();

            dd($createdConversation);


            // redirect('/chat');
        }
        else dd($checkedConversation);
    }
}
