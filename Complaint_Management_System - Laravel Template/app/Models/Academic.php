<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Academic
 * 
 * @property int $uid
 * @property string $id
 * @property string $course
 * @property string $Degree
 * @property string $branch
 * @property string $iname
 * @property string $univ
 * @property string $state
 * @property string $mos
 * @property string $mes
 * @property string $yc
 * @property string $cs
 * @property string $score
 * @property string $cnum
 * @property string $cert
 *
 * @package App\Models
 */
class Academic extends Model
{
	protected $table = 'academic';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'course',
		'Degree',
		'branch',
		'iname',
		'univ',
		'state',
		'mos',
		'mes',
		'yc',
		'cs',
		'score',
		'cnum',
		'cert'
	];
}
