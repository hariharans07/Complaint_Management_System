<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Login
 * 
 * @property string $uid
 * @property string $pass
 *
 * @package App\Models
 */
class Login extends Model
{
	protected $table = 'login';
	protected $primaryKey = 'uid';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'pass'
	];
}
