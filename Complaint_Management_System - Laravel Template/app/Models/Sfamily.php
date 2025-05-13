<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sfamily
 * 
 * @property int $uid
 * @property string $sid
 * @property string $name
 * @property string $gender
 * @property string $relationship
 * @property string $occu
 * @property string $org
 * @property string $mobile
 *
 * @package App\Models
 */
class Sfamily extends Model
{
	protected $table = 'sfamily';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'sid',
		'name',
		'gender',
		'relationship',
		'occu',
		'org',
		'mobile'
	];
}
