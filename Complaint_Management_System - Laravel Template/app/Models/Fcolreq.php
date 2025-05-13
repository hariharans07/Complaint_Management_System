<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fcolreq
 * 
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $dept
 * @property string $manager
 * @property string $fdate
 * @property string $reason
 * @property string $intime
 * @property string $outtime
 * @property float $days
 * @property int $status
 * @property string $adate
 *
 * @package App\Models
 */
class Fcolreq extends Model
{
	protected $table = 'fcolreq';
	public $timestamps = false;

	protected $casts = [
		'days' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'uid',
		'name',
		'dept',
		'manager',
		'fdate',
		'reason',
		'intime',
		'outtime',
		'days',
		'status',
		'adate'
	];
}
