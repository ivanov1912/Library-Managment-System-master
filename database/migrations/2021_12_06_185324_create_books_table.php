<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->LONGTEXT('content')->nullable();
            $table->integer('year')->nullable();
            $table->integer('book_no')->nullable();
            $table->string('image')->nullable();

             // FOREIGN KEYS
             $table->unsignedBigInteger('author_id')->nullable();
             $table->foreign('author_id')->references('id')->on('authors')->cascadeOnDelete();

            // FOREIGN KEYS
            $table->unsignedBigInteger('flag_id')->nullable();
            $table->foreign('flag_id')->references('id')->on('books_flags')->cascadeOnDelete();

            // FOREIGN KEYS
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreign('genre_id')->references('id')->on('gendre_books')->cascadeOnDelete();

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
        Schema::dropIfExists('books');
    }
}
