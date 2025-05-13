<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sgrade
 * 
 * @property int $uid
 * @property int $sem
 * @property string $sid
 * @property float $sgpa
 * @property float $cgpa
 * @property float $ms1a
 * @property float $ms2a
 * @property float $prepa
 * @property float $ova
 * @property int $CA
 * @property int $OA
 *
 * @package App\Models
 */
class Sgrade extends Model
{
	protected $table = 'sgrade';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'sem' => 'int',
		'sgpa' => 'float',
		'cgpa' => 'float',
		'ms1a' => 'float',
		'ms2a' => 'float',
		'prepa' => 'float',
		'ova' => 'float',
		'CA' => 'int',
		'OA' => 'int'
	];

	protected $fillable = [
		'sem',
		'sid',
		'sgpa',
		'cgpa',
		'ms1a',
		'ms2a',
		'prepa',
		'ova',
		'CA',
		'OA'
	];
}
