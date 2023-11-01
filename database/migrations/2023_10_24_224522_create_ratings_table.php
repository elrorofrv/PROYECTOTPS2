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
                $table->integer('rating');
                $table->text('comment');
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent();
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('ratings');
        }
    }