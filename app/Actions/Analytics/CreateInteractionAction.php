<?php

namespace App\Actions\Analytics;

use App\Models\Interaction;

class CreateInteractionAction
{
    public function execute(array $data): Interaction
    {
        $entry = Interaction::create([
            'interactable_id' => $data['interactableId'] ?? null,
            'interactable_type' => $data['interactableType'] ?? null,
            'user_id' => $data['userId'] ?? null,
            'session_id' => $data['sessionId'] ?? null,
            'type' => $data['type'] ?? null,
            'ip_address' => $data['ipAddress'] ?? null,
            'user_agent' => $data['userAgent'] ?? null,
            'interacted_at' => now(),
        ]);

        $entry->save();
        return $entry;
    }
}
