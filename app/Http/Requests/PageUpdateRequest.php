<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            "title" => "required",
            "url" => "required|alpha_num"
        ];
    }
}
