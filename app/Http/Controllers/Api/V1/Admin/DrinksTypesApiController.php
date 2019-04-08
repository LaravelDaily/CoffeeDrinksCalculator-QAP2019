<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DrinksType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinksTypeRequest;
use App\Http\Requests\UpdateDrinksTypeRequest;

class DrinksTypesApiController extends Controller
{
    public function index()
    {
        $drinksTypes = DrinksType::all();

        return $drinksTypes;
    }

    public function store(StoreDrinksTypeRequest $request)
    {
        return DrinksType::create($request->all());
    }

    public function update(UpdateDrinksTypeRequest $request, DrinksType $drinksType)
    {
        return $drinksType->update($request->all());
    }

    public function show(DrinksType $drinksType)
    {
        return $drinksType;
    }

    public function destroy(DrinksType $drinksType)
    {
        return $drinksType->delete();
    }
}
