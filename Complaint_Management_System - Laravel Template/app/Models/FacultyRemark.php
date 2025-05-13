<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FacultyRemark
 * 
 * @property int $id
 * @property int|null $faculty_id
 * @property string|null $remarks
 * @property Carbon $status_changed_at
 *
 * @package App\Models
 */
class FacultyRemark extends Model
{
	protected $table = 'faculty_remarks';
	public $timestamps = false;

	protected $casts = [
		'faculty_id' => 'int',
		'status_changed_at' => 'datetime'
	];

	protected $fillable = [
		'faculty_id',
		'remarks',
		'status_changed_at'
	];
}
