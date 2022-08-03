<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PagesDisplayController;
use Closure;
use App\Models\Page;
use Illuminate\Http\Request;

class PageRedirectionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $asked_url = $request->path();
        $possible_page = Page::where('url', '=', $asked_url)->first();
        if($possible_page == null){
            return $next($request);
        } else {
            return PagesDisplayController::display($possible_page);
        }
    }
}
