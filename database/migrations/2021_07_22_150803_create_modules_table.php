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
            $table->string('module_slug');
            $table->integer('user_id');
            $table->tinyInteger('module_FE_Duration')->nullable(true);
            $table->decimal('module_FE_Cost', 15, 2)->nullable(true);
            $table->decimal('module_FE_Price', 15, 2)->nullable(true);
            $table->tinyInteger('module_BE_Duration')->nullable(true);
            $table->decimal('module_BE_Cost', 15, 2)->nullable(true);
            $table->decimal('module_BE_Price', 15, 2)->nullable(true);
            $table->tinyInteger('module_FS_Duration')->nullable(true);
            $table->decimal('module_FS_Cost', 15, 2)->nullable(true);
            $table->decimal('module_FS_Price', 15, 2)->nullable(true);
            $table->decimal('module_Cost_Total', 15, 2)->nullable(true);
            $table->decimal('module_Price_Total', 15, 2)->nullable(true);
            $table->text('module_Notes')->nullable(true);
            $table->tinyInteger('module_Status');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
