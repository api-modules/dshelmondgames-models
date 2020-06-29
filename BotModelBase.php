<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

/**
 * Class BotModelBase
 *
 * @package App\Models
 *
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BotModelBase extends Model
{
    public static $useOldFormat = false;

    protected $connection = 'mysql_bot';

    /**
     * The default guarded columns for a model.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        if (self::$useOldFormat) {
            return $date->format('Y-m-d H:i:s');
        }

        return parent::serializeDate($date);
    }
}
