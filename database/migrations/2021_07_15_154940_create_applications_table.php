<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('app_slug');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->tinyInteger('status');
            $table->decimal('app_FE_Cost', 15, 2)->nullable(true);
            $table->decimal('app_FE_Price', 15, 2)->nullable(true);
            $table->decimal('app_BE_Cost', 15, 2)->nullable(true);
            $table->decimal('app_BE_Price', 15, 2)->nullable(true);
            $table->decimal('app_FS_Cost', 15, 2)->nullable(true);
            $table->decimal('app_FS_Price', 15, 2)->nullable(true);
            $table->string('start_project_t')->nullable(true);
            $table->string('end_project_t')->nullable(true);
            $table->string('deadline_project_t')->nullable(true);
            $table->decimal('app_Cost_Total', 15, 2)->nullable(true);
            $table->decimal('app_Price_Total', 15, 2)->nullable(true);
            $table->text('app_notes')->nullable(true);
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
        Schema::dropIfExists('applications');
    }
}
