<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Exp
 * 
 * @property int $uid
 * @property string $id
 * @property string $type
 * @property string $iname
 * @property string $design
 * @property string $role
 * @property Carbon $fromd
 * @property string $tod
 * @property string $exp
 * @property string $cert
 *
 * @package App\Models
 */
class Exp extends Model
{
	protected $table = 'exp';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'fromd' => 'datetime'
	];

	protected $fillable = [
		'id',
		'type',
		'iname',
		'design',
		'role',
		'fromd',
		'tod',
		'exp',
		'cert'
	];
}
