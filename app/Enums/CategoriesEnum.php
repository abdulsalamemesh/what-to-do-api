<?php

namespace App\Enums;

enum CategoriesEnum: string
{
    case STAYING_BUSY = 'staying busy';
    case RESTING = 'resting';
    case SOCIAL = 'social';
    case LEARN = 'learn';
    case CHARITY = 'charity';
    case COOK = 'cook';
    case MUSIC = 'music';
    case DIY = 'DIY';
    case FUN = 'fun';


    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::names(),self::values());
    }
}
