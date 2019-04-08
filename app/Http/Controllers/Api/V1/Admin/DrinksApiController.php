<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Drink;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;

class DrinksApiController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();

        return $drinks;
    }

    public function store(StoreDrinkRequest $request)
    {
        return Drink::create($request->all());
    }

    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        return $drink->update($request->all());
    }

    public function show(Drink $drink)
    {
        return $drink;
    }

    public function destroy(Drink $drink)
    {
        return $drink->delete();
    }
}
