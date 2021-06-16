<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     * Ajouter des éléments
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('video');
            $table->tinyInteger('verification')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Drop(supprime) des éléments
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bugs');
    }
}
