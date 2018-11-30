<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends BotModelBase
{
    use SoftDeletes;
}
