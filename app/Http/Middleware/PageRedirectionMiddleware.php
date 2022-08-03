<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageRedirectionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // $asked_url = $request->path();
        // $possible_page = Page::where('url', '=', $asked_url)->first();
        // if($possible_page == null){
            return $next($request);
        // } else {
        //     return PagesDisplayController::display($possible_page);
        // }
    }
}
