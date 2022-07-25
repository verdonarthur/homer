<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin EloquentBuilder
 * @mixin QueryBuilder
 */
class Group extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
