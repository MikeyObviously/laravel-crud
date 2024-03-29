<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('employees', function($table)
            {
                $table->increments('id');
                $table->string('first_name', 128);
                $table->string('last_name', 128);
                $table->string('email', 128);
				$table->timestamps();
            });
	}
public function down()
	{
		Schema::drop('employees');
	}
	
	

}
