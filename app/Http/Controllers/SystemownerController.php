<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Systemowner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SystemownerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Systemowner::class);

        $search = $request->get('search', '');

        $systemowners = Systemowner::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.systemowners.index',
            compact('systemowners', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Systemowner::class);

        $users = User::pluck('name', 'id');

        return view('app.systemowners.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Systemowner::class);

        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $systemowner = Systemowner::create($validated);

        return redirect()
            ->route('systemowners.edit', $systemowner)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Systemowner $systemowner): View
    {
        $this->authorize('view', $systemowner);

        return view('app.systemowners.show', compact('systemowner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Systemowner $systemowner): View
    {
        $this->authorize('update', $systemowner);

        $users = User::pluck('name', 'id');

        return view('app.systemowners.edit', compact('systemowner', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Systemowner $systemowner
    ): RedirectResponse {
        $this->authorize('update', $systemowner);

        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $systemowner->update($validated);

        return redirect()
            ->route('systemowners.edit', $systemowner)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Systemowner $systemowner
    ): RedirectResponse {
        $this->authorize('delete', $systemowner);

        $systemowner->delete();

        return redirect()
            ->route('systemowners.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
