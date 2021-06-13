<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_category', function (Blueprint $table) {
            $table->foreignId('bug_id')->constrained();
            $table->foreignId('category_id')->constrained();
        });
    }

//create table if not exists bug_cateogry(
//bug_id int not null,
//category_id int not null
//) ENGINE=InnoDB;
//
//alter table bug_category
//add contrains bug_category_bug_id foreign key bug_id reference bugs (id)
//add contrains bug_category_category_id forein key category_id refence categories (id);

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bug_category');
    }
}
