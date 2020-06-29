<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 *
 * @package App\Models\Bot
 *
 * @property integer id
 * @property string  owner_id
 * @property string  name
 * @property string  content
 */
class Tag extends BotModelBase
{
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
