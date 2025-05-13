<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sbasic
 * 
 * @property string $sid
 * @property string $fname
 * @property string $lname
 * @property string $gender
 * @property string $programme
 * @property string $department
 * @property string $batch
 * @property Carbon $dob
 * @property string $blood
 * @property string $mobile
 * @property string $pmobile
 * @property string $email
 * @property string $languages
 * @property string $aadhar
 * @property string $hosday
 * @property string $room
 * @property string $stay
 * @property string $paddress
 * @property string $taddress
 * @property string $state
 * @property string $city
 * @property string $zip
 * @property string $country
 * @property string $pphoto
 * @property string $fphoto
 * @property string $mphoto
 * @property int $status
 * @property string $Strengths
 * @property string $Weaknesses
 * @property string $Opportunities
 * @property string $Threats
 *
 * @package App\Models
 */
class Sbasic extends Model
{
	protected $table = 'sbasic';
	protected $primaryKey = 'sid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dob' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'fname',
		'lname',
		'gender',
		'programme',
		'department',
		'batch',
		'dob',
		'blood',
		'mobile',
		'pmobile',
		'email',
		'languages',
		'aadhar',
		'hosday',
		'room',
		'stay',
		'paddress',
		'taddress',
		'state',
		'city',
		'zip',
		'country',
		'pphoto',
		'fphoto',
		'mphoto',
		'status',
		'Strengths',
		'Weaknesses',
		'Opportunities',
		'Threats'
	];
}
