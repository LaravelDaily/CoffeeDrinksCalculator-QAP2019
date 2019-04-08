<?php

namespace App\Http\Requests;

use App\Drink;
use Illuminate\Foundation\Http\FormRequest;

class StoreDrinkRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('drink_create');
    }

    public function rules()
    {
        return [
            'completed_at' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
