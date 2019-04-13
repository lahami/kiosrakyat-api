<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->integer('id_order', true);
			$table->integer('total');
			$table->integer('subtotal');
			$table->boolean('status');
			$table->integer('id_produkterpilih')->index('FK_produkterpilih');
			$table->integer('id_pembayaran')->index('FK_pembayaran');
			$table->integer('id_pengiriman')->index('FK_pengiriman');
			$table->integer('id_kios')->index('FK_kiosorder');
			$table->integer('id_konsumen')->index('FK_konsumen');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}
