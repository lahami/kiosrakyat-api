<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdukKiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produk_kios', function(Blueprint $table)
		{
			$table->foreign('id_kios', 'FK_kios')->references('id_kios')->on('kios')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_produkkoperasi', 'FK_produkkoperasi')->references('id_produkkoperasi')->on('produk_koperasi')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produk_kios', function(Blueprint $table)
		{
			$table->dropForeign('FK_kios');
			$table->dropForeign('FK_produkkoperasi');
		});
	}

}
