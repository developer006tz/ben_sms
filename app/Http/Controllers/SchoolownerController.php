<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Schoolowner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SchoolownerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Schoolowner::class);

        $search = $request->get('search', '');

        $schoolowners = Schoolowner::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.schoolowners.index',
            compact('schoolowners', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Schoolowner::class);

        return view('app.schoolowners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Schoolowner::class);

        $validated = $request->validate([
            'schoolname' => ['required', 'max:255', 'string'],
        ]);

        $schoolowner = Schoolowner::create($validated);

        return redirect()
            ->route('schoolowners.edit', $schoolowner)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Schoolowner $schoolowner): View
    {
        $this->authorize('view', $schoolowner);

        return view('app.schoolowners.show', compact('schoolowner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Schoolowner $schoolowner): View
    {
        $this->authorize('update', $schoolowner);

        return view('app.schoolowners.edit', compact('schoolowner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Schoolowner $schoolowner
    ): RedirectResponse {
        $this->authorize('update', $schoolowner);

        $validated = $request->validate([
            'schoolname' => ['required', 'max:255', 'string'],
        ]);

        $schoolowner->update($validated);

        return redirect()
            ->route('schoolowners.edit', $schoolowner)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Schoolowner $schoolowner
    ): RedirectResponse {
        $this->authorize('delete', $schoolowner);

        $schoolowner->delete();

        return redirect()
            ->route('schoolowners.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
