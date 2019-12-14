<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('rol');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          // $table->integer('number');
          // $table->string('sexo');
          // $table->date('fecha_nac');
          $table->string('pais');
          $table->string('municipios');
          // $table->avatar('avatar');
          $table->rememberToken();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
