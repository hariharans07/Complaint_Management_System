<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Smedical
 * 
 * @property int $uid
 * @property string $sid
 * @property string $fdate
 * @property string $tdate
 * @property int $tdays
 * @property string $reason
 * @property string $mcert
 * @property int $status
 * @property string $adate
 * @property string $arole
 * @property string $aname
 * @property string $aid
 *
 * @package App\Models
 */
class Smedical extends Model
{
	protected $table = 'smedical';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'tdays' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'fdate',
		'tdate',
		'tdays',
		'reason',
		'mcert',
		'status',
		'adate',
		'arole',
		'aname',
		'aid'
	];
}
