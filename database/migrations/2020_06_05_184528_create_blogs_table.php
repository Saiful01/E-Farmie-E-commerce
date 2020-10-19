<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->string('blog_title');
            $table->text('blog_details');
           $table->unsignedInteger('blogger_id')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('publish_status')->default(true);
            $table->boolean('comment_enable')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('blog_category_id');

            $table->foreign('blog_category_id')->references('blog_category_id')->on('blog_categories');
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
        Schema::dropIfExists('blogs');
    }
}
