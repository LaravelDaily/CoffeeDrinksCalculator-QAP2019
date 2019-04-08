<?php

namespace App\Http\Controllers\Admin;

use App\DrinksType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinksTypeRequest;
use App\Http\Requests\UpdateDrinksTypeRequest;

class DrinksTypesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('drinks_type_access'), 403);

        $drinksTypes = DrinksType::all();

        return view('admin.drinksTypes.index', compact('drinksTypes'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('drinks_type_create'), 403);

        return view('admin.drinksTypes.create');
    }

    public function store(StoreDrinksTypeRequest $request)
    {
        abort_unless(\Gate::allows('drinks_type_create'), 403);

        $drinksType = DrinksType::create($request->all());

        return redirect()->route('admin.drinks-types.index');
    }

    public function edit(DrinksType $drinksType)
    {
        abort_unless(\Gate::allows('drinks_type_edit'), 403);

        return view('admin.drinksTypes.edit', compact('drinksType'));
    }

    public function update(UpdateDrinksTypeRequest $request, DrinksType $drinksType)
    {
        abort_unless(\Gate::allows('drinks_type_edit'), 403);

        $drinksType->update($request->all());

        return redirect()->route('admin.drinks-types.index');
    }

    public function show(DrinksType $drinksType)
    {
        abort_unless(\Gate::allows('drinks_type_show'), 403);

        return view('admin.drinksTypes.show', compact('drinksType'));
    }

    public function destroy(DrinksType $drinksType)
    {
        abort_unless(\Gate::allows('drinks_type_delete'), 403);

        $drinksType->delete();

        return back();
    }
}
