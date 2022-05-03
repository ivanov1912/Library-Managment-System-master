<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();

        // FOREIGN KEYS
        $table->unsignedBigInteger('role_id')->nullable();
        $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
  
        // FOREIGN KEYS
        $table->unsignedBigInteger('gender_id')->nullable();
        $table->foreign('gender_id')->references('id')->on('genders')->cascadeOnDelete();
   
        // FOREIGN KEYS
        $table->unsignedBigInteger('flag_id')->nullable();
        $table->foreign('flag_id')->references('id')->on('user_flags')->cascadeOnDelete();
    

            $table->string('image')->nullable();
            $table->date('dob')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
