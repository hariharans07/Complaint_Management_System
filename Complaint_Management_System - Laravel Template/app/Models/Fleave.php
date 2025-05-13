<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fleave
 * 
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $dept
 * @property string $manager
 * @property string $ltype
 * @property string $fdate
 * @property string $tdate
 * @property float $fshift
 * @property float $tshift
 * @property float $tdays
 * @property string $reason
 * @property int $status
 * @property string|null $info
 * @property string $adate
 *
 * @package App\Models
 */
class Fleave extends Model
{
	protected $table = 'fleave';
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
		'ltype',
		'fdate',
		'tdate',
		'fshift',
		'tshift',
		'tdays',
		'reason',
		'status',
		'info',
		'adate'
	];
}
