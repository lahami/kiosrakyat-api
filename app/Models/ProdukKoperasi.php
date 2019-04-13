<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProdukKoperasi
 * 
 * @property int $id_produkkoperasi
 * @property string $nama_produk
 * @property string $gambar
 * @property string $kategori
 * 
 * @property \Illuminate\Database\Eloquent\Collection $produk_kios
 *
 * @package App\Models
 */
class ProdukKoperasi extends Eloquent
{
	protected $table = 'produk_koperasi';
	protected $primaryKey = 'id_produkkoperasi';
	public $timestamps = false;

	protected $fillable = [
		'nama_produk',
		'gambar',
		'kategori'
	];

	public function produk_kios()
	{
		return $this->hasMany(\App\Models\ProdukKio::class, 'id_produkkoperasi');
	}
}
