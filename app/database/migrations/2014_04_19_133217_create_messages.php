<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessages extends Migration {


	public function up()
	{
		Schema::create('messages', function($table)
		{
			$table->increments('id');
			$table->integer('sender_id');
			$table->text('members');
			$table->text('message');
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}


}
