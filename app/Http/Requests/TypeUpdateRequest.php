<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Type;

class TypeUpdateRequest extends FormRequest
{
    public function rules()
    {
        //Ensure layout exists
        $layout = strtolower($this->input('layout'));
        if (in_array($layout, Type::AVAILABLE_LAYOUTS)) {
            return Type::VALIDATION_RULES;
        } else {
            return abort(404, 'The asked layout is not available');
        }
    }
}
