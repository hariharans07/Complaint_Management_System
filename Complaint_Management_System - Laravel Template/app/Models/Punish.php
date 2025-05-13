<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Punish
 * 
 * @property int $uid
 * @property string $id
 * @property string $type
 * @property string $reason
 * @property Carbon $fromd
 * @property Carbon $tod
 *
 * @package App\Models
 */
class Punish extends Model
{
	protected $table = 'punish';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'fromd' => 'datetime',
		'tod' => 'datetime'
	];

	protected $fillable = [
		'id',
		'type',
		'reason',
		'fromd',
		'tod'
	];
}
