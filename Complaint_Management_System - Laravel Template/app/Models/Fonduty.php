<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fonduty
 * 
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $dept
 * @property string $manager
 * @property string $otype
 * @property string $fdate
 * @property string $tdate
 * @property float $fshift
 * @property float $tshift
 * @property float $tdays
 * @property string $reason
 * @property string $file
 * @property int $status
 * @property string $adate
 *
 * @package App\Models
 */
class Fonduty extends Model
{
	protected $table = 'fonduty';
	public $timestamps = false;

	protected $casts = [
		'fshift' => 'float',
		'tshift' => 'float',
		'tdays' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'uid',
		'name',
		'dept',
		'manager',
		'otype',
		'fdate',
		'tdate',
		'fshift',
		'tshift',
		'tdays',
		'reason',
		'file',
		'status',
		'adate'
	];
}
