<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConversationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            // 'name' => $request->user()->id == $this->sender_id ?  User::firstWhere('id', $this->receiver_id)->get('name') :  User::firstWhere('id', $this->sender_id)->get('name')
        ];
    }
}
