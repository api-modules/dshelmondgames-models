<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class FooterQuote extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'footerQuotes';
}
