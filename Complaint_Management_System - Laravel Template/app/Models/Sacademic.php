<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sacademic
 * 
 * @property int $uid
 * @property string $sid
 * @property string $course
 * @property string $degree
 * @property string $branch
 * @property string $iname
 * @property string $board
 * @property string $mos
 * @property string $yc
 * @property string $score
 * @property string $cert
 *
 * @package App\Models
 */
class Sacademic extends Model
{
	protected $table = 'sacademic';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'sid',
		'course',
		'degree',
		'branch',
		'iname',
		'board',
		'mos',
		'yc',
		'score',
		'cert'
	];
}
