<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageCreationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "title" => "required",
            "url" => "required|alpha"
        ];
    }
}
