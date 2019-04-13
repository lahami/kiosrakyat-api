<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdukKiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_kios', function(Blueprint $table)
		{
			$table->integer('id_produkkios', true);
			$table->integer('harga');
			$table->integer('stok');
			$table->integer('id_produkkoperasi')->index('FK_produkkoperasi');
			$table->integer('id_kios')->index('FK_kios');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk_kios');
	}

}
