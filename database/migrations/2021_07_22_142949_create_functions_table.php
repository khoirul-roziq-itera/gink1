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
            $table->string('function_Name');
            $table->string('function_Group');
            $table->tinyInteger('function_FE_Duration');
            $table->decimal('function_FE_Cost', 15, 2);
            $table->decimal('function_FE_Price', 15, 2);
            $table->tinyInteger('function_BE_Duration');
            $table->decimal('function_BE_Cost', 15, 2);
            $table->decimal('function_BE_Price', 15, 2);
            $table->tinyInteger('function_FS_Duration');
            $table->decimal('function_FS_Cost', 15, 2);
            $table->decimal('function_FS_Price', 15, 2);
            $table->text('function_Coment');
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
