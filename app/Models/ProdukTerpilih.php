<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdukTerpilih
 * 
 * @property int $id_produkterpilih
 * @property int $id_produkkios
 * @property int $id_order
 * 
 * @property \App\Models\Order $order
 * @property \App\Models\ProdukKio $produk_kio
 * @property \Illuminate\Database\Eloquent\Collection $orders
 *
 * @package App\Models
 */
class ProdukTerpilih extends Eloquent
{
	protected $table = 'produk_terpilih';
	protected $primaryKey = 'id_produkterpilih';
	public $timestamps = false;

	protected $casts = [
		'id_produkkios' => 'int',
		'id_order' => 'int'
	];

	protected $fillable = [
		'id_produkkios',
		'id_order'
	];

	public function order()
	{
		return $this->belongsTo(\App\Models\Order::class, 'id_order');
	}

	public function produk_kio()
	{
		return $this->belongsTo(\App\Models\ProdukKio::class, 'id_produkkios');
	}

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id_produkterpilih');
	}
}
