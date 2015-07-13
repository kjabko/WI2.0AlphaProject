<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tile', function(Blueprint $table)
		{
			$table->string('id');
			$table->integer('user_id');
			$table->string('title');
			$table->string('place');
			$table->string('img_sm');
			$table->string('img_bg');
			$table->boolean('private');
			$table->double('lat', 20,10);
			$table->double('lng',20,10);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tile');
	}

}

