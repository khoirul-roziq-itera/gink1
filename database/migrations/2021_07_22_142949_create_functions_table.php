<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->id();
            $table->string('function_Title');
            $table->string('function_Name');
            $table->string('function_slug');
            $table->integer('user_id');
            $table->string('function_Group');
            $table->tinyInteger('function_FE_Duration')->nullable(true);
            $table->decimal('function_FE_Cost', 15, 2)->nullable(true);
            $table->decimal('function_FE_Price', 15, 2)->nullable(true);
            $table->tinyInteger('function_BE_Duration')->nullable(true);
            $table->decimal('function_BE_Cost', 15, 2)->nullable(true);
            $table->decimal('function_BE_Price', 15, 2)->nullable(true);
            $table->tinyInteger('function_FS_Duration')->nullable(true);
            $table->decimal('function_FS_Cost', 15, 2)->nullable(true);
            $table->decimal('function_FS_Price', 15, 2)->nullable(true);
            $table->text('function_Notes')->nullable(true);
            $table->tinyInteger('function_Status');
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
        Schema::dropIfExists('functions');
    }
}
