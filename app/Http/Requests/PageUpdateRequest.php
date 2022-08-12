<?php

namespace App\Http\Requests;

use App\Models\Page;
use App\Models\Type;
use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
{
    public function rules()
    {
        //Ensure the type exist
        Type::findOrFail($this->input('type_id'));    
        return Page::VALIDATION_RULES;
    }
}
