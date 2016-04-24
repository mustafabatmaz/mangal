<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->string('slug')->unique();
            $table->timestamps();
			$table->index('slug');
        });

		DB::table('pages')->insert(
	        array(
	            'title' => 'Hakkımda',
	            'slug' => 'hakkimda',
	            'content' => 'Benim blogum',
				'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
	        )
	    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
