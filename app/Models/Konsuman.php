<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Konsuman
 * 
 * @property int $id_konsumen
 * @property string $password
 * 
 * @property \Illuminate\Database\Eloquent\Collection $orders
 *
 * @package App\Models
 */
class Konsuman extends Eloquent
{
	protected $primaryKey = 'id_konsumen';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password'
	];

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id_konsumen');
	}
}
