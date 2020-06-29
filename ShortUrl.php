<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ShortUrl
 *
 * @package App\Models
 *
 * @property string short_url
 * @property string long_url
 *
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ShortUrl extends Model
{
    use SoftDeletes;

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'short_url',
        'long_url',
    ];

}
