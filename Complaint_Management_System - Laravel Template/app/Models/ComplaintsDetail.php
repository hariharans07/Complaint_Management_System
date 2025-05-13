<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ComplaintsDetail
 * 
 * @property int $id
 * @property string $faculty_id
 * @property string $fac_id
 * @property string $block_venue
 * @property string $venue_name
 * @property string $type_of_problem
 * @property string $problem_description
 * @property string|null $itemno
 * @property string $images
 * @property Carbon $date_of_reg
 * @property string $days_to_complete
 * @property Carbon|null $manager_approve
 * @property int $extend_date
 * @property string|null $extend_reason
 * @property string $worker_id
 * @property string $status
 * @property string $feedback
 * @property int|null $rating
 * @property string|null $mfeedback
 * @property int|null $mrating
 * @property string|null $p_reason
 * @property string $reason
 * @property string|null $amount_spent
 * @property string $task_completion
 * @property Carbon $date_of_completion
 * @property Carbon|null $reassign_date
 *
 * @package App\Models
 */
class ComplaintsDetail extends Model
{
	protected $table = 'complaints_detail';
	public $timestamps = false;

	protected $casts = [
		'date_of_reg' => 'datetime',
		'manager_approve' => 'datetime',
		'extend_date' => 'int',
		'rating' => 'int',
		'mrating' => 'int',
		'date_of_completion' => 'datetime',
		'reassign_date' => 'datetime'
	];

	protected $fillable = [
		'faculty_id',
		'fac_id',
		'block_venue',
		'venue_name',
		'type_of_problem',
		'problem_description',
		'itemno',
		'images',
		'date_of_reg',
		'days_to_complete',
		'manager_approve',
		'extend_date',
		'extend_reason',
		'worker_id',
		'status',
		'feedback',
		'rating',
		'mfeedback',
		'mrating',
		'p_reason',
		'reason',
		'amount_spent',
		'task_completion',
		'date_of_completion',
		'reassign_date'
	];
}
