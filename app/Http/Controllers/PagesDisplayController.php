<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class PagesDisplayController extends Controller
{
    public static function display($page){
        // return response()->view('page_view')->with("page", $page);
        return view('frontend/page/page_view')->with("page", $page);
    }

    public static function findRoute(Request $request){
        $asked_url = $request->path();
        $possible_page = Page::whereUrl($asked_url)->first();
        if($possible_page === null){
            abort(404);
        } else {
            return PagesDisplayController::display($possible_page);
        }
    }
}
