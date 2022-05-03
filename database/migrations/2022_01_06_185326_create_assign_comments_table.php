<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_comments', function (Blueprint $table) {
            $table->id();
            
                  // FOREIGN KEYS
                  $table->unsignedBigInteger('book_id')->nullable();
                  $table->foreign('book_id')->references('id')->on('books')->cascadeOnDelete();
      
                    // FOREIGN KEYS
                    $table->unsignedBigInteger('user_id')->nullable();
                    $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

            $table->string('name')->nullable();
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
        Schema::dropIfExists('assign_comments');
    }
}
