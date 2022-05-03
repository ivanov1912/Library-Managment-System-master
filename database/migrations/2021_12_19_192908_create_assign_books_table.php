<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_books', function (Blueprint $table) {
            $table->id();

             // FOREIGN KEYS
             $table->unsignedBigInteger('user_id')->nullable();
             $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();


             // FOREIGN KEYS
             $table->unsignedBigInteger('book_id')->nullable();
             $table->foreign('book_id')->references('id')->on('books')->cascadeOnDelete();
            
            $table->date('date_of_receipt')->nullable();
            $table->date('date_of_return')->nullable();
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
        Schema::dropIfExists('assign_books');
    }
}
