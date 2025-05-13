<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Slang
 * 
 * @property int $id
 * @property string $uid
 * @property string $ayear
 * @property string $lang
 * @property string $level
 * @property string $cert
 * @property Carbon $Utime
 * @property int $status
 *
 * @package App\Models
 */
class Slang extends Model
{
	protected $table = 'slang';
	public $timestamps = false;

	protected $casts = [
		'Utime' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'uid',
		'ayear',
		'lang',
		'level',
		'cert',
		'Utime',
		'status'
	];
}
