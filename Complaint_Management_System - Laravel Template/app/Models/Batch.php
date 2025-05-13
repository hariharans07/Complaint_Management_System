<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Batch
 * 
 * @property int $id
 * @property string $batch
 * @property int $status
 *
 * @package App\Models
 */
class Batch extends Model
{
	protected $table = 'batch';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'batch',
		'status'
	];
}
