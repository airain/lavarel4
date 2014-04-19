<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersGames extends Migration {

	public function up()
	{
		Schema::create('usersgames', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title');
			$table->string('slug');
			$table->integer('price');
			$table->string('description')->nullable();
			$table->string('cover')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('usersgames');
	}

}
