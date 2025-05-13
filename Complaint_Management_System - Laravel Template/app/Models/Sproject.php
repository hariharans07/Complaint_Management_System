<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sproject
 * 
 * @property int $uid
 * @property string $sid
 * @property string|null $ayear
 * @property int $semester
 * @property string $title
 * @property string $github
 * @property string $remark
 * @property Carbon $Utime
 * @property int $status
 *
 * @package App\Models
 */
class Sproject extends Model
{
	protected $table = 'sproject';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'semester' => 'int',
		'Utime' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'ayear',
		'semester',
		'title',
		'github',
		'remark',
		'Utime',
		'status'
	];
}
