<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ofaculty
 * 
 * @property int $uid
 * @property string $uname
 * @property string $name
 * @property string $pass
 * @property string $role
 *
 * @package App\Models
 */
class Ofaculty extends Model
{
	protected $table = 'ofaculty';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'uname',
		'name',
		'pass',
		'role'
	];
}
