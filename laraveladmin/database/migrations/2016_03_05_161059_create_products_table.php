<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_entry', function(Blueprint $table)
		{
			$table->increments('entry_id');
			$table->string('entry_name')->unique();
			$table->string('tieude_khongdau');
			$table->string('entry_name_en');
			$table->longText('entry_content');
			$table->longText('entry_content_en');
			$table->string('entry_img');
			$table->date('entry_datetime');
			$table->integer('menu_id');
			$table->integer('entry_status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_entry');
	}

}
