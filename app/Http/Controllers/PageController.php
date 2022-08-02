<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\PageController;
use App\Http\Requests\PageCreationRequest;

class PageController extends Controller
{
    public function showPageCreationForm(){
        $user = Auth::user();
        if (!$user->isAdmin()) {
            abort(403, 'You must be admin to create pages.');
        } else {
            return view("page_creation_view");
        }
    }

    public function createPage(PageCreationRequest $request){
        dd($request);
    }
}
