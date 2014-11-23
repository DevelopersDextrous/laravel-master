<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			//
                    $table->increments('id');
                    $table->string('username')->nullable()->default(NULL);
                    $table->string('password')->nullable()->default(NULL);
                    $table->string('email')->nullable()->default(NULL);
                    $table->dateTime('created_at')->nullable()->default(NULL);
                    $table->dateTime('updated_at')->nullable()->default(NULL);
                            
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function(Blueprint $table)
		{
			//
		});
	}

}
