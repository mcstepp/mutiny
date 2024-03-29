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
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('chosen_name')->nullable();
            $table->string('last_name');
            $table->string('slug');
            $table->unsignedInteger('job_id');
            $table->string('job_other')->nullable();
            $table->unsignedInteger('faction_id');
            $table->unsignedInteger('origin_faction_id');
            $table->unsignedInteger('ic_birth_month');
            $table->unsignedInteger('ic_birth_day');
            $table->unsignedInteger('ic_birth_year');
            $table->unsignedInteger('initiation_year');
            $table->unsignedInteger('age');
            $table->text('personality');
            $table->text('history');
            $table->text('appearance');
            $table->string('faceclaim')->nullable();
            $table->unsignedInteger('credit')->default(0);
            $table->unsignedInteger('current')->default(0);
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
