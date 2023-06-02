<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ChatListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $conversations = Conversation::where('sender_id', $id)
                                        ->orWhere('receiver_id', $id)
                                        ->orderBy('last_time_message','desc')
                                        ->get();

        return Inertia::render('Chat/Chat', [
            "conversations" => $conversations->load('user','messages')
        ]);
    }
}
