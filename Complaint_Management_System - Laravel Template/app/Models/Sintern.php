<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sintern
 * 
 * @property int $uid
 * @property string $sid
 * @property string $iname
 * @property string $type
 * @property string|null $ayear
 * @property string $org
 * @property string $dur
 * @property string $rem
 * @property string $cert
 * @property int $status
 *
 * @package App\Models
 */
class Sintern extends Model
{
	protected $table = 'sintern';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'sid',
		'iname',
		'type',
		'ayear',
		'org',
		'dur',
		'rem',
		'cert',
		'status'
	];
}
