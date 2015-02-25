<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MakePatientInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient_info', function(Blueprint $table)
		{
			$table->bigincrements('file_number');
			$table->char('name' , 90);
			$table->biginteger('id_number');
			$table->text('residents');
			$table->string('sex');
			$table->integer('age');
			$table->text('marital_status');
			$table->char('next_of_keen' ,90);
			$table->biginteger('keen_phone_number');
			$table->text('postal address');
			$table->biginteger('phone_number');
			$table->string('email');
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
		Schema::drop('patient_info');
	}

}
