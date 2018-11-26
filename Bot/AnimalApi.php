<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\Builder;

class AnimalApi extends BotModelBase
{
    protected $hidden = [
        'api',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function targetLlama(): Builder
    {
        return self::where('api', 'llama');
    }

    public function getFileAttribute($value): String
    {
        return str_cdnPrefix($value);
    }

}
