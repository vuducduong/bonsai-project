<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryParentsIdToCategoryChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_childs', function (Blueprint $table) {
                $table->unsignedBigInteger('category_parent_id');
                $table->foreign('category_parent_id')->references('id')->on('category_parents')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_childs', function (Blueprint $table) {
            //
        });
    }
}
