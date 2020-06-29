<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RedirectLink
 *
 * @package App\Models
 *
 * @property string slug
 * @property string target
 *
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RedirectLink extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'target',
        'slug',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
