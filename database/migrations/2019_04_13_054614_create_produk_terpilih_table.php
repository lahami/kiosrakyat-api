<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdukTerpilihTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk_terpilih', function(Blueprint $table)
		{
			$table->integer('id_produkterpilih', true);
			$table->integer('id_produkkios')->index('FK_produkkios');
			$table->integer('id_order')->index('FK_order');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk_terpilih');
	}

}
