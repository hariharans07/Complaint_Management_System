<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Training
 * 
 * @property int $uid
 * @property string $id
 * @property string $type
 * @property string $no
 * @property string $name
 * @property Carbon $fromd
 * @property Carbon $tod
 * @property string $cert
 *
 * @package App\Models
 */
class Training extends Model
{
	protected $table = 'training';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'fromd' => 'datetime',
		'tod' => 'datetime'
	];

	protected $fillable = [
		'id',
		'type',
		'no',
		'name',
		'fromd',
		'tod',
		'cert'
	];
}
