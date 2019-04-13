<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 * 
 * @property int $id_order
 * @property int $total
 * @property int $subtotal
 * @property int $status
 * @property int $id_produkterpilih
 * @property int $id_pembayaran
 * @property int $id_pengiriman
 * @property int $id_kios
 * @property int $id_konsumen
 * 
 * @property \App\Models\Kio $kio
 * @property \App\Models\Konsuman $konsuman
 * @property \App\Models\Pembayaran $pembayaran
 * @property \App\Models\Pengiriman $pengiriman
 * @property \App\Models\ProdukTerpilih $produk_terpilih
 * @property \Illuminate\Database\Eloquent\Collection $produk_terpilihs
 *
 * @package App\Models
 */
class Order extends Eloquent
{
	protected $table = 'order';
	protected $primaryKey = 'id_order';
	public $timestamps = false;

	protected $casts = [
		'total' => 'int',
		'subtotal' => 'int',
		'status' => 'int',
		'id_produkterpilih' => 'int',
		'id_pembayaran' => 'int',
		'id_pengiriman' => 'int',
		'id_kios' => 'int',
		'id_konsumen' => 'int'
	];

	protected $fillable = [
		'total',
		'subtotal',
		'status',
		'id_produkterpilih',
		'id_pembayaran',
		'id_pengiriman',
		'id_kios',
		'id_konsumen'
	];

	public function kio()
	{
		return $this->belongsTo(\App\Models\Kio::class, 'id_kios');
	}

	public function konsuman()
	{
		return $this->belongsTo(\App\Models\Konsuman::class, 'id_konsumen');
	}

	public function pembayaran()
	{
		return $this->belongsTo(\App\Models\Pembayaran::class, 'id_pembayaran');
	}

	public function pengiriman()
	{
		return $this->belongsTo(\App\Models\Pengiriman::class, 'id_pengiriman');
	}

	public function produk_terpilih()
	{
		return $this->belongsTo(\App\Models\ProdukTerpilih::class, 'id_produkterpilih');
	}

	public function produk_terpilihs()
	{
		return $this->hasMany(\App\Models\ProdukTerpilih::class, 'id_order');
	}
}
