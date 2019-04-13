<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengirimanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengiriman', function(Blueprint $table)
		{
			$table->integer('id_pengiriman', true);
			$table->string('metode_kirim', 70);
			$table->integer('biaya_kirim');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengiriman');
	}

}
