<?php

namespace App\Http\Controllers\Admin;

use App\Drink;
use App\DrinksType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;
use App\User;

class DrinksController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('drink_access'), 403);

        $drinks = Drink::all();

        return view('admin.drinks.index', compact('drinks'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('drink_create'), 403);

        $drink_types = DrinksType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.drinks.create', compact('drink_types'));
    }

    public function store(StoreDrinkRequest $request)
    {
        abort_unless(\Gate::allows('drink_create'), 403);

        $drink = $request->all();
        $drink['barista_id'] = auth()->id();

        $drink_type = DrinksType::find($request->drink_type_id);
        $drink['price'] = $drink_type->price;

        Drink::create($drink);

        return redirect()->route('admin.drinks.index');
    }

    public function edit(Drink $drink)
    {
        abort_unless(\Gate::allows('drink_edit'), 403);

        $baristas = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $drink_types = DrinksType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $drink->load('barista', 'drink_type');

        return view('admin.drinks.edit', compact('baristas', 'drink_types', 'drink'));
    }

    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        abort_unless(\Gate::allows('drink_edit'), 403);

        $drink->update($request->all());

        return redirect()->route('admin.drinks.index');
    }

    public function show(Drink $drink)
    {
        abort_unless(\Gate::allows('drink_show'), 403);

        $drink->load('barista', 'drink_type');

        return view('admin.drinks.show', compact('drink'));
    }

    public function destroy(Drink $drink)
    {
        abort_unless(\Gate::allows('drink_delete'), 403);

        $drink->delete();

        return back();
    }

    public function complete($drink_id)
    {
        abort_unless(\Gate::allows('drink_delete'), 403);

        $drink = Drink::findOrFail($drink_id);

        $drink->update(['completed_at' => now()]);

        return back();
    }

}
