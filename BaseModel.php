<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

/**
 * Class BaseModel
 *
 * @package App\Models
 *
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BaseModel extends Model
{

    /**
     * The default guarded columns for a model.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
