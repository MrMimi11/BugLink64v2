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
            $table->string('pseudo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

//CREATE TABLE utilisateurs(
//id_utilisateur Int  Auto_increment  NOT NULL ,
//pseudo         Varchar (255) NOT NULL ,
//email          Varchar (255) NOT NULL ,
//motdepasse     Varchar (255) NOT NULL
//,CONSTRAINT utilisateurs_PK PRIMARY KEY (id_utilisateur)
//)ENGINE=InnoDB;

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
