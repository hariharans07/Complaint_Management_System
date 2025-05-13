<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Counselling
 * 
 * @property int $uid
 * @property string $sid
 * @property Carbon $datee
 * @property string $feedback
 * @property string $actions
 * @property int $status
 * @property string $adate
 * @property string $aname
 * @property string $aid
 * @property string $arole
 *
 * @package App\Models
 */
class Counselling extends Model
{
	protected $table = 'counselling';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'datee' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'datee',
		'feedback',
		'actions',
		'status',
		'adate',
		'aname',
		'aid',
		'arole'
	];
}
