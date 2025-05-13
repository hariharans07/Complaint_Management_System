<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $uid
 * @property string $sid
 * @property string $sname
 * @property string $ayear
 * @property string $mail
 * @property string $dept
 * @property string|null $section
 * @property string $pass
 * @property string $mentor
 * @property int $bc
 * @property int $ac
 * @property int $status
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'student';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'bc' => 'int',
		'ac' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'sname',
		'ayear',
		'mail',
		'dept',
		'section',
		'pass',
		'mentor',
		'bc',
		'ac',
		'status'
	];
}
