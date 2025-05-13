<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Parentmeeting
 * 
 * @property int $uid
 * @property string $sid
 * @property Carbon $datee
 * @property string $purpose
 * @property string $suggestion
 * @property int $status
 * @property string $adate
 *
 * @package App\Models
 */
class Parentmeeting extends Model
{
	protected $table = 'parentmeeting';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'datee' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'datee',
		'purpose',
		'suggestion',
		'status',
		'adate'
	];
}
