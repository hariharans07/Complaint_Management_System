<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Journal
 * 
 * @property int $uid
 * @property string $id
 * @property string $pt
 * @property string $jn
 * @property string $pn
 * @property string $vol
 * @property string $issue
 * @property string $pages
 * @property string $pissn
 * @property string $eissn
 * @property string $scope
 * @property string $mon
 * @property string $paper
 *
 * @package App\Models
 */
class Journal extends Model
{
	protected $table = 'journal';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'pt',
		'jn',
		'pn',
		'vol',
		'issue',
		'pages',
		'pissn',
		'eissn',
		'scope',
		'mon',
		'paper'
	];
}
