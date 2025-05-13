<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Posting
 * 
 * @property int $uid
 * @property string $id
 * @property string $level
 * @property string $pname
 * @property Carbon $fromd
 * @property string $tod
 *
 * @package App\Models
 */
class Posting extends Model
{
	protected $table = 'posting';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'fromd' => 'datetime'
	];

	protected $fillable = [
		'id',
		'level',
		'pname',
		'fromd',
		'tod'
	];
}
