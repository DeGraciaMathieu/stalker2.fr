<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            // $table->integer('thumbnail_id');
            $table->string('title');
            $table->string('slug');
            $table->text('highlight');
            $table->text('content');
            $table->boolean('online')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        // Schema::create('thumbnails', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('type');
        //     $table->string('hash');
        // });

        Schema::create('paper_tag', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('paper_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('paper_id')->references('id')->on('papers')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });              
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('thumbnails');
        Schema::dropIfExists('post_tag');
    }
}
