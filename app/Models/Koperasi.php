<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Koperasi
 * 
 * @property int $id_adminkoperasi
 * @property string $password
 * 
 * @property \Illuminate\Database\Eloquent\Collection $kios
 *
 * @package App\Models
 */
class Koperasi extends Eloquent
{
	protected $table = 'koperasi';
	protected $primaryKey = 'id_adminkoperasi';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password'
	];

	public function kios()
	{
		return $this->hasMany(\App\Models\Kio::class, 'id_adminkoperasi');
	}
}
