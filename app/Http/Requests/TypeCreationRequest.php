<?php

namespace App\Http\Requests;

use App\Models\Type;
use Illuminate\Foundation\Http\FormRequest;

class TypeCreationRequest extends FormRequest
{
    public function rules()
    {
            //Ensure layout is available
            $layout = strtolower($this->input('layout'));
            if(in_array($layout, Type::AVAILABLE_LAYOUTS)){
                return Type::VALIDATION_RULES;
            } else {
                return abort(404, 'The asked layout is not available');
            }
    }
}
