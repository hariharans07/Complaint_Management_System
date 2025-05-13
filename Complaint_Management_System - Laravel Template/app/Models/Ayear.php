<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ayear
 * 
 * @property int $id
 * @property string $ayear
 *
 * @package App\Models
 */
class Ayear extends Model
{
	protected $table = 'ayear';
	public $timestamps = false;

	protected $fillable = [
		'ayear'
	];
}
