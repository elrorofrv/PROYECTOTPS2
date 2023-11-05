<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('assessment');
            $table->text('review');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('user_id'); // Cambiado a 'user_id'
            $table->foreign('user_id') // Cambiado a 'user_id'
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) { // Cambiado a 'ratings'
            $table->dropForeign(['user_id']); // Cambiado a 'user_id'
        });

        Schema::dropIfExists('ratings'); // Cambiado a 'ratings'
    }
}