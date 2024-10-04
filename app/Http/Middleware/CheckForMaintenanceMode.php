<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckForMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $exceptions = [
            'super*',
            'super/*',
        ];

        // Check if the application is in maintenance mode and the request does not match any exception
        if (app()->isDownForMaintenance() && !$this->isException($request, $exceptions)) {
            return abort(503);
        }

        return $next($request);
    }

    /**
     * Check if the request matches any of the exception patterns.
     *
     * @param \Illuminate\Http\Request $request
     * @param array $exceptions
     * @return bool
     */
    protected function isException(Request $request, array $exceptions)
    {
        foreach ($exceptions as $pattern) {
            if ($request->is($pattern)) {
                return true;
            }
        }
        return false;
    }
}
