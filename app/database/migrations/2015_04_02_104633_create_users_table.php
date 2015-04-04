<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($t){
			$t->increments('id');
			$t->enum('user_prefix', array('นาย','นาง','นางสาว'));
			$t->string('user_fname',50);
			$t->string('user_lname',50);
			$t->string('user_faculty',50);
			$t->string('user_major',50);
			$t->string('user_position',20);
			$t->enum('user_gender', array('ชาย','หญิง'));
			$t->string('user_nation',20);
			$t->enum('user_level_education', array('Bachelor', 'Master', 'PhD.'));
			$t->string('user_degree',50);
			$t->string('user_education',50);
			$t->string('user_tel',20);
			$t->string('user_email',255);
			$t->string('user_username',50);
			$t->string('user_password',50);
			$t->timestamps();
			$t->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
