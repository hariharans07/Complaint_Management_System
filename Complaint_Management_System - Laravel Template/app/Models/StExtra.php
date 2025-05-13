<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StExtra
 * 
 * @property int $uid
 * @property string $sid
 * @property string $event
 * @property string|null $ayear
 * @property string $level
 * @property string $organiser
 * @property string $prize
 * @property string $cert
 * @property Carbon $Utime
 * @property int $status
 *
 * @package App\Models
 */
class StExtra extends Model
{
	protected $table = 'st_extra';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'Utime' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'event',
		'ayear',
		'level',
		'organiser',
		'prize',
		'cert',
		'Utime',
		'status'
	];
}
