<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public const VALIDATION_RULES = [
        'title' => 'required',
        'url' => 'required|alpha_dash',
    ];

    protected $fillable = [
        'title', 
        'url'
    ];
}

