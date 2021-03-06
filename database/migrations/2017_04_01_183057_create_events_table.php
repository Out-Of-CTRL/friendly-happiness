<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->nullable()->index();
            #$table->date('date')->index();
            #$table->time('hour')->index();
            $table->integer('hour'); #8-20
            $table->integer('zi'); #1-7
            $table->integer('paritate')->nullable(); #0-mereu 1-impar 2-par
            $table->integer('room_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('type');
            $table->string('grupa');
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
        Schema::dropIfExists('events');
    }
}
