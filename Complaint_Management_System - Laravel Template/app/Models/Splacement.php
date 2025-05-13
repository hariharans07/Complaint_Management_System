<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Splacement
 * 
 * @property int $uid
 * @property string $sid
 * @property string|null $ayear
 * @property Carbon $date
 * @property string $np
 * @property string $ds
 * @property string $pr
 * @property int $status
 *
 * @package App\Models
 */
class Splacement extends Model
{
	protected $table = 'splacement';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'ayear',
		'date',
		'np',
		'ds',
		'pr',
		'status'
	];
}
