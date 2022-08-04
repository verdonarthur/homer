<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    public const VALIDATION_RULES = [
        'title' => 'required',
        'url' => 'required|alpha_dash',
        'type_id' => 'required|numeric'
    ];

    protected $fillable = [
        'title', 
        'url',
        'type_id'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}

