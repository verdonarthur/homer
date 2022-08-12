<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Type;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Requests\PageCreationRequest;

class PagesController extends Controller
{
    public function index(): View
    {   
        $pages = Page::paginate(10);  
        return view('backoffice.page.index', ['pages' => $pages, 'links' => $pages->render()]);
    }

    public function create(): View
    {
        $types = Type::get()->toArray();
        return view('backoffice.page.create', ['types' => $types]);
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
        $types = Type::get()->toArray();
        return view('backoffice.page.edit', ['page' => $page, 'types' => $types]);
    }

    public function update(PageUpdateRequest $request,int $id): RedirectResponse
    {
        Page::whereId($id)
            ->update($request->validated());
        return redirect()->action([PagesController::class, 'index']);
    }
    
    public function destroy(int $id): RedirectResponse
    {
        Page::whereId($id)->firstOrFail()->delete();
        return redirect()->action([PagesController::class, 'index']);
    }
}
