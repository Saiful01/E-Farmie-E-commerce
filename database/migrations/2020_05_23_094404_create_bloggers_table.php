<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloggers', function (Blueprint $table) {
            $table->increments('blogger_id');
            $table->string('blogger_name');
            $table->string('blogger_phone');
            $table->string('blogger_image')->nullable();
            $table->string('password');
            $table->string('blogger_email')->unique();
            $table->string('blogger_address')->nullable();
            $table->boolean('active_status')->default(false);
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
        Schema::dropIfExists('bloggers');
    }
}
