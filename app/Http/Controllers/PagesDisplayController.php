<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesDisplayController extends Controller
{
    public static function handleRoute(Request $request): View {
        $currentUrl = $request->path();
        $page = Page::whereUrl($currentUrl)->firstOrFail();
            return view('frontend.page.index', ['page' => $page]);
    }
}
