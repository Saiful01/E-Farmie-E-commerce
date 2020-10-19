<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->text('comment_name');
            $table->text('comment_email');
            $table->text('comment');
            $table->boolean('is_spam')->default(false);
            $table->unsignedBigInteger('blogger_id')->nullable();
            $table->unsignedInteger('blog_id');

            $table->foreign('blog_id')->references('blog_id')->on('blogs');

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
        Schema::dropIfExists('comments');
    }
}
