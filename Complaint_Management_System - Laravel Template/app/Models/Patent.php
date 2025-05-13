<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patent
 * 
 * @property int $uid
 * @property string $id
 * @property string $type
 * @property string $title
 * @property Carbon $fd
 * @property string $anum
 * @property string $status
 * @property string $noa
 * @property string $cert
 *
 * @package App\Models
 */
class Patent extends Model
{
	protected $table = 'patent';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'fd' => 'datetime'
	];

	protected $fillable = [
		'id',
		'type',
		'title',
		'fd',
		'anum',
		'status',
		'noa',
		'cert'
	];
}
