<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrades extends Migration {

	public function up()
	{
		Schema::create('transactions', function($table)
		{
			$table->increments('id');
			$table->integer('sender_id');
			$table->integer('recipient_id');
			$table->integer('offer_id');
			$table->integer('answer_id');
		});
	}

	public function down()
	{
		Schema::drop('transactions');
	}
}
