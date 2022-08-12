<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TypeUpdateRequest;
use App\Http\Requests\TypeCreationRequest;

class TypesController extends Controller
{
    public function index(): View
    {   
        $types = Type::paginate(10);  
        return view('backoffice.type.index', ['types' => $types, 'links' => $types->render()]);
    }

    public function create(): View
    {
        $layouts = Type::AVAILABLE_LAYOUTS;
        return view('backoffice.type.create', ['layouts' => $layouts]);
    }

    public function store(TypeCreationRequest $request): RedirectResponse
    {
        Type::create($request->validated());
        return redirect()->action([TypesController::class, 'index']);
    }

    public function edit(int $id): View
    {
        $type = Type::whereId($id)->firstOrFail();
        $layouts = Type::AVAILABLE_LAYOUTS;
        return view('backoffice.type.edit', ['type' => $type, 'layouts' => $layouts]);
    }

    public function update(TypeUpdateRequest $request,int $id): RedirectResponse
    {
        Type::whereId($id)
            ->update($request->validated());
        return redirect()->action([TypesController::class, 'index']);
    }
    
    public function destroy(int $id): RedirectResponse
    {
        Type::whereId($id)->firstOrFail()->delete();
        return redirect()->action([TypesController::class, 'index']);
    }
}
