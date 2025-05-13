<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Research
 * 
 * @property string $id
 * @property string $oid
 * @property string $sid
 * @property string $rid
 * @property string $gsid
 * @property string $hid
 * @property string $iid
 * @property string $gi
 * @property string $cs
 * @property string $cgs
 *
 * @package App\Models
 */
class Research extends Model
{
	protected $table = 'research';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'oid',
		'sid',
		'rid',
		'gsid',
		'hid',
		'iid',
		'gi',
		'cs',
		'cgs'
	];
}
