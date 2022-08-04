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
        return view('backoffice.page.index', ['pages' => $pages, 'links' => $pages->render()]);
    }

    public function create()
    {
        return view('backoffice.page.create');
    }

    public function store(PageCreationRequest $request)
    {
        Page::create($request->validated());
        return redirect()->action([PagesController::class, 'index']);
    }

    public function show($id)
    {
        $page = Page::whereId($id)->firstOrFail();
        return view('backoffice.page.show', ['page' => $page]);
    }

    public function edit($id)
    {
        $page = Page::whereId($id)->firstOrFail();
        return view('frontend/page/pages_edit_view', ['page' => $page]);
    }

    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::whereId($id)->update([
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
