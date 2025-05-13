<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faculty
 * 
 * @property int $uid
 * @property string $id
 * @property string $name
 * @property string $dept
 * @property string $ddept
 * @property string $design
 * @property string $role
 * @property string $manager
 * @property string $doj
 * @property string $pass
 * @property string $cert
 * @property int $bc
 * @property int $ac
 * @property float $cl
 * @property float $col
 * @property float $odb
 * @property float $odr
 * @property float $odp
 * @property float $odo
 * @property float $vl
 * @property float $lop
 * @property float $ml
 * @property float $mal
 * @property float $mtl
 * @property float $ptl
 * @property float $sl
 * @property float $spl
 * @property float $pm
 * @property float $tenpm
 * @property int $status
 *
 * @package App\Models
 */
class Faculty extends Model
{
	protected $table = 'faculty';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'bc' => 'int',
		'ac' => 'int',
		'cl' => 'float',
		'col' => 'float',
		'odb' => 'float',
		'odr' => 'float',
		'odp' => 'float',
		'odo' => 'float',
		'vl' => 'float',
		'lop' => 'float',
		'ml' => 'float',
		'mal' => 'float',
		'mtl' => 'float',
		'ptl' => 'float',
		'sl' => 'float',
		'spl' => 'float',
		'pm' => 'float',
		'tenpm' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'dept',
		'ddept',
		'design',
		'role',
		'manager',
		'doj',
		'pass',
		'cert',
		'bc',
		'ac',
		'cl',
		'col',
		'odb',
		'odr',
		'odp',
		'odo',
		'vl',
		'lop',
		'ml',
		'mal',
		'mtl',
		'ptl',
		'sl',
		'spl',
		'pm',
		'tenpm',
		'status'
	];
}
