<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reminder
 *
 * @package App\Models
 *
 * @property string                     user_id
 * @property string                     channel_id
 * @property string                     reminder
 * @property \Illuminate\Support\Carbon remind_create_date
 * @property \Illuminate\Support\Carbon remind_date
 *
 */
class Reminder extends Model
{

}
