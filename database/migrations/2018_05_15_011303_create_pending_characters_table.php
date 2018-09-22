<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('faceclaim')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('faction_id');
            $table->unsignedInteger('rank_id');
            $table->bigInteger('ic_birthday');
            $table->unsignedInteger('initiation_year');
            $table->text('personality');
            $table->text('history');
            $table->text('appearance');
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
        Schema::dropIfExists('pending_characters');
    }
}
