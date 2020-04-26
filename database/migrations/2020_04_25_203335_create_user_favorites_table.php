<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unfavorite()->index();
            $table->integer('microposts_id')->unfavorite()->index();
            $table->timestamps();
            
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('microposts_id')->references('id')->on('users')->onDelete('cascade');

            $table->unique(['user_id', 'microposts_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
