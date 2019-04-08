<?php

namespace App\Http\Requests;

use App\DrinksType;
use Illuminate\Foundation\Http\FormRequest;

class StoreDrinksTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('drinks_type_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
