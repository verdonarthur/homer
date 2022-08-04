<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Requests\PageCreationRequest;
use Illuminate\Http\RedirectResponse;

class PagesController extends Controller
{
    public function index(): View
    {   
        $pages = Page::paginate(10);  
        return view('backoffice.page.index', ['pages' => $pages, 'links' => $pages->render()]);
    }

    public function create(): View
    {
        return view('backoffice.page.create');
    }

    public function store(PageCreationRequest $request): RedirectResponse
    {
        Page::create($request->validated());
        return redirect()->action([PagesController::class, 'index']);
    }

    public function show(int $id): View
    {
        $page = Page::whereId($id)->firstOrFail();
        return view('backoffice.page.show', ['page' => $page]);
    }

    public function edit(int $id): View
    {
        $page = Page::whereId($id)->firstOrFail();
        return view('backoffice.page.edit', ['page' => $page]);
    }

    public function update(PageUpdateRequest $request,int $id): RedirectResponse
    {
        Page::whereId($id)
            ->update($request->validated());
        return redirect()->action([PagesController::class, 'index']);
    }
    
    public function destroy(int $id): RedirectResponse
    {
        $page = Page::whereId($id)->firstOrFail()->delete();
        return redirect()->action([PagesController::class, 'index']);
    }
}
