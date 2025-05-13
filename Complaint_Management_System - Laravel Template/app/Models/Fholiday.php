<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fholiday
 * 
 * @property int $id
 * @property string $hdate
 * @property string $days
 * @property string $type
 * @property string $who
 *
 * @package App\Models
 */
class Fholiday extends Model
{
	protected $table = 'fholiday';
	public $timestamps = false;

	protected $fillable = [
		'hdate',
		'days',
		'type',
		'who'
	];
}
