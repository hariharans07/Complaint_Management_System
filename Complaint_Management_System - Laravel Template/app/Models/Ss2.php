<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ss2
 * 
 * @property int $uid
 * @property string $sid
 * @property string $sname
 * @property int $ms1
 * @property int $ms2
 * @property int $prep
 * @property string $sem
 *
 * @package App\Models
 */
class Ss2 extends Model
{
	protected $table = 'ss2';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'ms1' => 'int',
		'ms2' => 'int',
		'prep' => 'int'
	];

	protected $fillable = [
		'sid',
		'sname',
		'ms1',
		'ms2',
		'prep',
		'sem'
	];
}
