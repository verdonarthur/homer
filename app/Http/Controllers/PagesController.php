<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Requests\PageCreationRequest;

class PagesController extends Controller
{
    public function index()
    {   
        $pages = Page::paginate(10);  
        return view('pages_view', ['pages' => $pages, 'links' => $pages->render()]);
    }

   
    public function create()
    {
            return view('pages_creation_view');
    }

    
    public function store(PageCreationRequest $request)
    {
        Page::create($request->validated());
        return redirect()->action([PagesController::class, 'index']);
    }

    public function show($url)
    {
        $page = Page::whereUrl($url)->firstOrFail();
        return view('page_view', ['page' => $page]);
    }

    
    public function edit($id)
    {
        $page = Page::whereId($id)->firstOrFail();
        return view('pages_edit_view', ['page' => $page]);
    }

    
    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::whereId($id)->firstOrFail();
        $page->update([
            'title' => $request->input('title'),
            'url' => $request->input('url')
        ]);
        return redirect()->action([PagesController::class, 'index']);
    }


    
    public function destroy($id)
    {
        $page = Page::whereId($id)->firstOrFail();
        $page->delete();
        return redirect()->action([PagesController::class, 'index']);
    }
}
