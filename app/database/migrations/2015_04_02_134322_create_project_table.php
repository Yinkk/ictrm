<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function($t){
			//$t->increments('id');
			$t->increments('id');
			$t->text('project_contract');
			$t->string('project_name', 255);
			$t->integer('project_year');
			$t->decimal('project_budget', 20, 2);
			$t->tinyInteger('project_period');
			$t->string('project_start', 10);
			$t->string('project_finish', 10);
			$t->string('project_extend', 100);
			$t->longText('project_memo');
			$t->text('project_join_external');
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
		Schema::drop('project');
	}

}
