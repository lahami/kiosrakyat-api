<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kios', function(Blueprint $table)
		{
			$table->integer('id_kios', true);
			$table->string('password');
			$table->string('email', 70);
			$table->string('no_hp', 15);
			$table->string('nama_kios', 70);
			$table->text('alamat', 65535);
			$table->boolean('status_buka');
			$table->integer('id_adminkoperasi')->index('FK_adminkoperasi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kios');
	}

}
