<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdukKio
 * 
 * @property int $id_produkkios
 * @property int $harga
 * @property int $stok
 * @property int $id_produkkoperasi
 * @property int $id_kios
 * 
 * @property \App\Models\Kio $kio
 * @property \App\Models\ProdukKoperasi $produk_koperasi
 * @property \Illuminate\Database\Eloquent\Collection $produk_terpilihs
 *
 * @package App\Models
 */
class ProdukKio extends Eloquent
{
	protected $primaryKey = 'id_produkkios';
	public $timestamps = false;

	protected $casts = [
		'harga' => 'int',
		'stok' => 'int',
		'id_produkkoperasi' => 'int',
		'id_kios' => 'int'
	];

	protected $fillable = [
		'harga',
		'stok',
		'id_produkkoperasi',
		'id_kios'
	];

	public function kio()
	{
		return $this->belongsTo(\App\Models\Kio::class, 'id_kios');
	}

	public function produk_koperasi()
	{
		return $this->belongsTo(\App\Models\ProdukKoperasi::class, 'id_produkkoperasi');
	}

	public function produk_terpilihs()
	{
		return $this->hasMany(\App\Models\ProdukTerpilih::class, 'id_produkkios');
	}
}
