<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pembayaran
 * 
 * @property int $id_pembayaran
 * @property string $metode_bayar
 * 
 * @property \Illuminate\Database\Eloquent\Collection $orders
 *
 * @package App\Models
 */
class Pembayaran extends Eloquent
{
	protected $table = 'pembayaran';
	protected $primaryKey = 'id_pembayaran';
	public $timestamps = false;

	protected $fillable = [
		'metode_bayar'
	];

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id_pembayaran');
	}
}
