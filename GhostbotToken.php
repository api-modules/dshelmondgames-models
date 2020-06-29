<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GhostbotToken extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'bot_user_id',
        'bot_access_token',
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];

}
