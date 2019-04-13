<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pengiriman
 * 
 * @property int $id_pengiriman
 * @property string $metode_kirim
 * @property int $biaya_kirim
 * 
 * @property \Illuminate\Database\Eloquent\Collection $orders
 *
 * @package App\Models
 */
class Pengiriman extends Eloquent
{
	protected $table = 'pengiriman';
	protected $primaryKey = 'id_pengiriman';
	public $timestamps = false;

	protected $casts = [
		'biaya_kirim' => 'int'
	];

	protected $fillable = [
		'metode_kirim',
		'biaya_kirim'
	];

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id_pengiriman');
	}
}
