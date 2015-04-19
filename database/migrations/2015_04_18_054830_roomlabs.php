<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Roomlabs extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'roomlabs', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'roomNo', 20 );
			$table->char ( 'roomName', 50 );
			$table->string ( 'roomDes' );
			$table->dateTime ( 'updated_at' );
			$table->dateTime ( 'created_at' );
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
