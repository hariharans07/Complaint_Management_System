<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fpermission
 * 
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $dept
 * @property string $manager
 * @property string $ltype
 * @property string $fdate
 * @property string $reason
 * @property int $status
 * @property string $adate
 *
 * @package App\Models
 */
class Fpermission extends Model
{
	protected $table = 'fpermission';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'uid',
		'name',
		'dept',
		'manager',
		'ltype',
		'fdate',
		'reason',
		'status',
		'adate'
	];
}
