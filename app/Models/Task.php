<?php

namespace App\Models;

use App\Enums\CategoriesEnum;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'task',
        'category',
        'person',
        'cost',
        'links',
    ];

    protected $casts = [
        'category' => CategoriesEnum::class,
        'task'     => AsArrayObject::class,
        'links'    => AsArrayObject::class,
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->identifier = bin2hex(random_bytes(3));
        });
    }

}
