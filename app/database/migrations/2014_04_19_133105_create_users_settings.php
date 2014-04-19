<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSettings extends Migration {

	public function up()
	{
		Schema::create('userssettings', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
		});
	}

	public function down()
	{
		Schema::drop('userssettings');
	}

}
