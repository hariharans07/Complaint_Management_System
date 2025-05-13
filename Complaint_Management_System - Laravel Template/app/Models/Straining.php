<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Straining
 * 
 * @property int $uid
 * @property string $sid
 * @property Carbon $date
 * @property string $ict
 * @property string $hack
 * @property string $skill
 * @property string $action
 * @property int $status
 * @property string $adate
 *
 * @package App\Models
 */
class Straining extends Model
{
	protected $table = 'straining';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'date',
		'ict',
		'hack',
		'skill',
		'action',
		'status',
		'adate'
	];
}
