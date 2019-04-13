<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdukKoperasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_koperasi', function(Blueprint $table)
		{
			$table->integer('id_produkkoperasi', true);
			$table->text('nama_produk', 65535);
			$table->text('gambar', 65535);
			$table->text('kategori', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk_koperasi');
	}

}
