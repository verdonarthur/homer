<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class PagesDisplayController extends Controller
{
    public static function handleRoute(Request $request){
        $asked_url = $request->path();
        $possible_page = Page::whereUrl($asked_url)->first();
        if($possible_page === null){
            abort(404);
        } else {
            return view('frontend.page.index', ['page' => $possible_page]);
        }
    }
}
