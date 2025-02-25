<?php

namespace App\Services\Analytics;

use App\Jobs\RecordPageView;
use App\Models\Interaction;
use App\Models\PageView;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AnalyticsService
{
    public function trackPageView(Model $viewable, Request $request = null): void
    {
        $data = [
            'viewable_id' => $viewable->id,
            'viewable_type' => get_class($viewable),
            'user_id' => auth()->id(),
            'session_id' => Session::getId(),
            'ipAddress' => $request ? $request->ip() : request()->ip(),
            'userAgent' => $request ? $request->userAgent() : request()->userAgent(),
            'url' => $request ? $request->url() : null,
        ];

        RecordPageView::dispatch($data); // Dispatch job with data array

        if ($viewable instanceof Post) {
            $viewable->increment('views');
        }
    }

    public function trackRouteVisit(string $routeName, Request $request = null): void
    {
        $data = [
            'viewable_route_name' => $routeName,
            'user_id' => auth()->id(),
            'session_id' => Session::getId(),
            'ipAddress' => $request ? $request->ip() : request()->ip(),
            'userAgent' => $request ? $request->userAgent() : request()->userAgent(),
            'url' => $request ? $request->url() : $routeName,
        ];

        RecordPageView::dispatch($data); // Dispatch job with data array
    }


    public function trackInteraction(Model $interactable, string $type, Request $request = null): void
    {
        $data = [
            'interactable_id' => $interactable->id,
            'interactable_type' => get_class($interactable),
            'user_id' => auth()->id(),
            'session_id' => Session::getId(),
            'type' => $type,
            'ipAddress' => $request ? $request->ip() : request()->ip(),
            'userAgent' => $request ? $request->userAgent() : request()->userAgent(),
        ];

        RecordInteraction::dispatch($data); // Dispatch job with data array

        if (method_exists($interactable, 'increment') && in_array($type, ['like', 'useful_vote'])) {
            $interactable->increment($type . 's');
        }
    }
    public function getDailyViews()
    {
        return PageView::selectRaw('DATE(viewed_at) as date, COUNT(*) as views')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    }

    public function getPopularPosts()
    {
        return PageView::selectRaw('viewable_id, COUNT(*) as views')
            ->groupBy('viewable_id')
            ->orderBy('views', 'DESC')
            ->limit(10)
            ->with(['viewable' => function ($query) {
                $query->where('type', 'App\Models\Post');
            }])
            ->get();
    }
}
