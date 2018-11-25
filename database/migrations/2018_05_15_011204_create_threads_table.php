<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forum_id');
            $table->integer('author_id');
            $table->text('author_type');
            $table->string('title');
            $table->text('description')->nullable();
            $table->boolean('locked')->default(false);
            $table->boolean('pinned')->default(false);
            $table->boolean('announcement')->default(false);
            $table->bigInteger('ic_time')->nullable();
            $table->string('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('threads');
    }
}
