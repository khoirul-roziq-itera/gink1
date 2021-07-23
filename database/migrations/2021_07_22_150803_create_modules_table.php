<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_Name');
            $table->tinyInteger('module_FE_Duration');
            $table->decimal('module_FE_Cost', 15, 2);
            $table->decimal('module_FE_Price', 15, 2);
            $table->tinyInteger('module_BE_Duration');
            $table->decimal('module_BE_Cost', 15, 2);
            $table->decimal('module_BE_Price', 15, 2);
            $table->tinyInteger('module_FS_Duration');
            $table->decimal('module_FS_Cost', 15, 2);
            $table->decimal('module_FS_Price', 15, 2);
            $table->text('module_Coment');
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
        Schema::dropIfExists('modules');
    }
}