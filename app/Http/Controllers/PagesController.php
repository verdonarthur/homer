<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Requests\PageCreationRequest;

class PagesController extends Controller
{
    
    public function index()
    {   
        $pages = Page::paginate(10);
        $links = $pages->render();    
        return view("pages_view", compact("pages", "links"));
    }

   
    public function create()
    {
        $user = Auth::user();
        if (!$user->isAdmin()) {
            abort(403, 'You must be admin to create pages.');
        } else {
            return view("pages_creation_view");
        }
    }

    
    public function store(PageCreationRequest $request)
    {
        $new_page = Page::create($request->all());
        $new_page->save();
        return redirect('/pages')->withOk('Your page has been added successfully');
    }

    public function show($url)
    {
        $page = Page::where('url', '=', $url)->first();
        if($page != null){
            return view("page_view")->with("page", $page);
        } else {
            return abort(403, "This page does not exist");
        }
    }

    
    public function edit($id)
    {
        $page = Page::where("id", "=", $id)->first();
        if($page != null){
            return view("pages_edit_view")->with("page", $page);
        }else {
            return abort(403, "The requested page does not exist.");
        }
    }

    
    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::where('id', '=', $id)->first();
        $page->update([
            "title" => $request->input('title'),
            "url" => $request->input('url')
        ]);
        return redirect('/pages')->withOk("The page has correctly been updated.");

    }

    
    public function destroy($id)
    {
        $page = Page::where("id", "=", $id)->first();
        $page->delete();
        return redirect()->back()->withOk("The page has correctly been deleted.");
    }
}
