<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Kio
 * 
 * @property int $id_kios
 * @property string $password
 * @property string $email
 * @property string $no_hp
 * @property string $nama_kios
 * @property string $alamat
 * @property int $status_buka
 * @property int $id_adminkoperasi
 * 
 * @property \App\Models\Koperasi $koperasi
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $produk_kios
 *
 * @package App\Models
 */
class Kio extends Eloquent
{
	protected $primaryKey = 'id_kios';
	public $timestamps = false;

	protected $casts = [
		'status_buka' => 'int',
		'id_adminkoperasi' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password',
		'email',
		'no_hp',
		'nama_kios',
		'alamat',
		'status_buka',
		'id_adminkoperasi'
	];

	public function koperasi()
	{
		return $this->belongsTo(\App\Models\Koperasi::class, 'id_adminkoperasi');
	}

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id_kios');
	}

	public function produk_kios()
	{
		return $this->hasMany(\App\Models\ProdukKio::class, 'id_kios');
	}
}
