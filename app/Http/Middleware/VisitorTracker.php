<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorTracker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Visitor::updateOrCreate([
            'ip_address' => $request->getClientIp(),
            'user_agent' => $request->userAgent(),
            'url' => $request->url(),
            'path' => $request->path(),
            'user_id' => auth()->id() ?? null
        ], [
            'ip_address' => $request->getClientIp(),
            'user_agent' => $request->userAgent(),
            'url' => $request->url(),
            'path' => $request->path(),
            'user_id' => auth()->id() ?? null,
            'referer' => $request->headers->get('referer') ?? $request->server('HTTP_REFERER')
        ]);
        return $next($request);
    }
}
