<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BotModelBase extends Model
{
    protected $connection = 'mysql_bot';
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
