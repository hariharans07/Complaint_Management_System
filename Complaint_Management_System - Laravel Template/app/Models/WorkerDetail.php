<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkerDetail
 * 
 * @property int $id
 * @property string $worker_id
 * @property string $usertype
 * @property string $worker_first_name
 * @property string $worker_dept
 * @property string $worker_mobile
 *
 * @package App\Models
 */
class WorkerDetail extends Model
{
	protected $table = 'worker_details';
	public $timestamps = false;

	protected $fillable = [
		'worker_id',
		'usertype',
		'worker_first_name',
		'worker_dept',
		'worker_mobile'
	];
}
