<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('faceclaim')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('faction_id');
            $table->unsignedInteger('rank_id');
            $table->unsignedInteger('credit')->default(1000);
            $table->unsignedInteger('initiation_year');
            $table->bigInteger('ic_birthday');
            $table->text('personality');
            $table->text('history');
            $table->text('appearance');
            $table->boolean('current')->default(0);
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
        Schema::dropIfExists('characters');
    }
}
