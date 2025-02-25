<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use App\Services\Analytics\AnalyticsService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    public function __construct(protected AnalyticsService $analyticsService) {}

    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeUrl = $request->url() ?? $request->route()->getName(); // Get the route url or name

        if ($routeUrl) {
            $this->analyticsService->trackRouteVisit($routeUrl, $request);
        }

        return $next($request);
    }

}
