<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdukTerpilihTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produk_terpilih', function(Blueprint $table)
		{
			$table->foreign('id_order', 'FK_order')->references('id_order')->on('order')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_produkkios', 'FK_produkkios')->references('id_produkkios')->on('produk_kios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produk_terpilih', function(Blueprint $table)
		{
			$table->dropForeign('FK_order');
			$table->dropForeign('FK_produkkios');
		});
	}

}
