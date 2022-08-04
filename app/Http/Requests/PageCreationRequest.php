<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class PageCreationRequest extends FormRequest
{
    public function rules(): array
    {
        return Page::VALIDATION_RULES;
    }
}
