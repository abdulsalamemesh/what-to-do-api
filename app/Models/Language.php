<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public const KEYS = [
        'en-US',
        'de',
        'es',
        'fr',
        'it',
        'tr',
        'uk',
    ];

    public const NAMES = [
        'english',
        'german',
        'spanish',
        'french',
        'italian',
        'turkish',
        'ukrainian',
    ];
    public const KEYS_AND_NAMES = [
        'en-US' => 'english',
        'de'    => 'german',
        'es'    => 'spanish',
        'fr'    => 'french',
        'it'    => 'italian',
        'tr'    => 'turkish',
        'uk'    => 'ukrainian',
    ];
    public const KEYS_AND_EMPTY_VALUES = [
        'en-US' => '',
        'de'    => '',
        'es'    => '',
        'fr'    => '',
        'it'    => '',
        'tr'    => '',
        'uk'    => '',
    ];
}
