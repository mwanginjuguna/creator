<?php

namespace App\Actions\Analytics;

use App\Models\PageView;

class CreatePageViewAction
{
    public function execute(array $data): PageView
    {
        $entry = PageView::create([
            'url' => $data['url'] ?? null,
            'session_id' => $data['sessionId'] ?? null,
            'ip_address' => $data['ipAddress'] ?? null,
            'user_agent' => $data['userAgent'] ?? null,
            'viewed_at' => now(),
        ]);

        if (isset($data['userId'])) {
            $entry->user_id = $data['userId'];
        }

        if (isset($data['viewableId']) && isset($data['viewableType'])) {
            $entry->viewable_type = $data['viewableType'];
            $entry->viewable_id = $data['viewableId'];
        }

        if (isset($data['viewableRouteName'])) {
            $entry->viewable_route_name = $data['viewableRouteName'];
        }

        $entry->save();
        return $entry;
    }
}
