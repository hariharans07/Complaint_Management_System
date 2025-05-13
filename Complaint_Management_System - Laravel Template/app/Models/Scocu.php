<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scocu
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
 * @property int|null $status
 *
 * @package App\Models
 */
class Scocu extends Model
{
	protected $table = 'scocu';
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
