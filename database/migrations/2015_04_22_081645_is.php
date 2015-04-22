<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Is extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ( 'stock', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'stock_no', 45 )->nullable();
			$table->char ( 'name', 200 )->nullable();
			$table->string ( 'description' )->nullable();
			$table->integer ( 'create_user' )->nullable();
			$table->date ( 'create_date' )->nullable();
			$table->integer ( 'update_user' )->nullable();
			$table->date ( 'update_date' )->nullable();
		} );
		
		Schema::create ( 'room', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'room_no', 45 )->nullable();
			$table->char ( 'name', 200 )->nullable();
			$table->string ( 'description' )->nullable();
			$table->integer ( 'create_user' )->nullable();
			$table->date ( 'create_date' )->nullable();
			$table->integer ( 'update_user' )->nullable();
			$table->date ( 'update_date' )->nullable();
		} );
		
		Schema::create ( 'material', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'brand', 45 )->nullable();
			$table->char ( 'model', 45 )->nullable();
			$table->string ( 'description' )->nullable();
			$table->integer ( 'amount' )->nullable();
			$table->integer ( 'unit_price' )->nullable();
			$table->integer ( 'create_user' )->nullable();
			$table->date ( 'create_date' )->nullable();
			$table->integer ( 'update_user' )->nullable();
			$table->date ( 'update_date' )->nullable();
			$table->integer ( 'stock_id' )->unsigned();
			$table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
		} );
		
		Schema::create ( 'device_type', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'type_no', 45 )->nullable();
			$table->char ( 'name', 200 )->nullable();
			$table->string ( 'description' )->nullable();
			$table->integer ( 'create_user' )->nullable();
			$table->date ( 'create_date' )->nullable();
			$table->integer ( 'update_user' )->nullable();
			$table->date ( 'update_date' )->nullable();
		} );
		
		Schema::create ( 'device', function ($table) {
			$table->increments ( 'id' );
			$table->char ( 'device_no', 45 )->nullable();
			$table->char ( 'brand', 45 )->nullable();
			$table->char ( 'model', 45 )->nullable();
			$table->char ( 'ip_address', 45 )->nullable();
			$table->string ( 'description' )->nullable();
			$table->char ( 'serial_no', 100 )->nullable();
			$table->char ( 'warranty', 45 )->nullable();
			$table->integer ( 'amount' )->nullable();
			$table->char ( 'unit_price', 45 )->nullable();
			$table->string ( 'remark' )->nullable();
			$table->integer ( 'create_user' )->nullable();
			$table->date ( 'create_date' )->nullable();
			$table->integer ( 'update_user' )->nullable();
			$table->date ( 'update_date' )->nullable();
			$table->integer ( 'stock_id' )->unsigned();
			$table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
			$table->integer ( 'device_type_id' )->unsigned();
			$table->foreign('device_type_id')->references('id')->on('device_type')->onDelete('cascade');
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

