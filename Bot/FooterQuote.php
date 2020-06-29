<?php

namespace App\Models\Bot;

use App\Models\BotModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FooterQuote
 *
 * @package App\Models\Bot
 *
 * @property integer id
 * @property string  name
 * @property string  quote
 */
class FooterQuote extends BotModelBase
{
    use SoftDeletes;

    protected $table = 'footerQuotes';
}
