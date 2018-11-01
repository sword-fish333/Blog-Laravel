<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->boolean('status');
            $table->string('category');
            $table->string('image');
            $table->integer('author')->unsigned();

            $table->foreign('author')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->timestamps();

        });



    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
