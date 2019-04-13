<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 12:10:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Kategori
 * 
 * @property int $id_kategori
 * @property string $kategori
 *
 * @package App\Models
 */
class Kategori extends Eloquent
{
	protected $table = 'kategori';
	protected $primaryKey = 'id_kategori';
	public $timestamps = false;

	protected $fillable = [
		'kategori'
	];
}
