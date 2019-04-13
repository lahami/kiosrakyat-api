<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->foreign('id_kios', 'FK_kiosorder')->references('id_kios')->on('kios')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_konsumen', 'FK_konsumen')->references('id_konsumen')->on('konsumen')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_pembayaran', 'FK_pembayaran')->references('id_pembayaran')->on('pembayaran')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_pengiriman', 'FK_pengiriman')->references('id_pengiriman')->on('pengiriman')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_produkterpilih', 'FK_produkterpilih')->references('id_produkterpilih')->on('produk_terpilih')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->dropForeign('FK_kiosorder');
			$table->dropForeign('FK_konsumen');
			$table->dropForeign('FK_pembayaran');
			$table->dropForeign('FK_pengiriman');
			$table->dropForeign('FK_produkterpilih');
		});
	}

}
