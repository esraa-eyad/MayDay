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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('age');
            $table->string('bolde_type');
            $table->string('chronic_diseases');
            $table->String('allergic_diseases');
            $table->string('image');

            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();
            $table->text('message');
            $table->text('qrcode')->nullable();

            $table->string('phone');
            $table->string('Emergency_phone');

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
