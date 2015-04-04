<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbnewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbnews', function($t){
			$t->increments('id');
			$t->string('titleNews', 200);
			$t->text('detailNews');
			$t->string('postByUser', 100);
			$t->softDeletes();
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbnews');
	}

}
