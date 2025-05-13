<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nominee
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $share
 *
 * @package App\Models
 */
class Nominee extends Model
{
	protected $table = 'nominee';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'share'
	];
}
