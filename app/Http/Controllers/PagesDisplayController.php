<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class PagesDisplayController extends Controller
{
    public static function display($page){
        // return response()->view('page_view')->with("page", $page);
        return Redirect::to('pages/'.$page->id)->with('page',  $page);
    }
}
