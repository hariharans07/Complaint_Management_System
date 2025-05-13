<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Family
 * 
 * @property int $uid
 * @property string $id
 * @property string $name
 * @property string $gender
 * @property string $relationship
 * @property string $mobile
 *
 * @package App\Models
 */
class Family extends Model
{
	protected $table = 'family';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'name',
		'gender',
		'relationship',
		'mobile'
	];
}
