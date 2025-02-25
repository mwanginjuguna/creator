<?php

namespace App\Http\Middleware;

use App\Services\Analytics\AnalyticsService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageView
{
    public function __construct(protected AnalyticsService $analyticsService) {}

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next, string $viewableType): Response
    {
        $viewable = null;

        switch ($viewableType) {
            case 'post':
                $viewable = $request->route('post');
                break;
            case 'category':
                $viewable = $request->route('category');
                break;
            case 'tag':
                $viewable = $request->route('tag');
                break;
            // Add cases for other viewable types as needed (e.g., 'page', 'product')
            default:
                return $next($request); // If viewable type is not recognized, just proceed
        }

        if ($viewable) {
            $this->analyticsService->trackPageView($viewable, $request);
        }

        return $next($request);
    }
}
