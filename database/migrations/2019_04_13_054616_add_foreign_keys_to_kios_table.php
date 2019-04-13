<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kios', function(Blueprint $table)
		{
			$table->foreign('id_adminkoperasi', 'FK_adminkoperasi')->references('id_adminkoperasi')->on('koperasi')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kios', function(Blueprint $table)
		{
			$table->dropForeign('FK_adminkoperasi');
		});
	}

}
