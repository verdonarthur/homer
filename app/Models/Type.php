<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    public const VALIDATION_RULES = [
        'name' => 'required',
        'layout' => 'required|alpha',
    ];

    public const AVAILABLE_LAYOUTS = [
        'product',
        'generic',
        'boutique'
    ];

    protected $fillable = [
        'name',
        'layout'
    ];

    public function pages() {
        return $this->hasMany(Page::class);
    }
}
