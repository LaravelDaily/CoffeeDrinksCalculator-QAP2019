<?php

namespace App\Http\Requests;

use App\DrinksType;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDrinksTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('drinks_type_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
