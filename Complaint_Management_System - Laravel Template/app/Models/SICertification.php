<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SICertification
 * 
 * @property int $uid
 * @property string $sid
 * @property string $cname
 * @property string|null $ayear
 * @property string $duration
 * @property string $organiser
 * @property string $cert
 * @property Carbon $Uname
 * @property int $status
 *
 * @package App\Models
 */
class SICertification extends Model
{
	protected $table = 's_i_certification';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'Uname' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'cname',
		'ayear',
		'duration',
		'organiser',
		'cert',
		'Uname',
		'status'
	];
}
