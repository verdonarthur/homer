<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Type;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PagesDisplayController extends Controller
{
    public static function handleRoute(Request $request): View {
        $currentUrl = $request->path();
        $page = Page::whereUrl($currentUrl)->firstOrFail();
        $layout= $page->type->layout;
        return view('frontend.page.index', ['page' => $page, 'layout' => $layout]);
    }
}
