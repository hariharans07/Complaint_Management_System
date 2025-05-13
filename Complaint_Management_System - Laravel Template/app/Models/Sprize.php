<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sprize
 * 
 * @property int $uid
 * @property string $sid
 * @property string $event
 * @property string|null $ayear
 * @property string $level
 * @property string $organiser
 * @property string $prize
 * @property string $cert
 * @property Carbon $Uname
 * @property int $status
 *
 * @package App\Models
 */
class Sprize extends Model
{
	protected $table = 'sprize';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'Uname' => 'datetime',
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
		'Uname',
		'status'
	];
}
