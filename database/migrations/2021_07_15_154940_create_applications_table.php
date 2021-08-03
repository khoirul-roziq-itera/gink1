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
            $table->integer('category');
            $table->integer('tags');
            $table->tinyInteger('status');
            $table->string('start_project_t');
            $table->string('end_project_t');
            $table->string('deadline_project_t');
            $table->decimal('cost_total');
            $table->decimal('price_total');
            $table->text('notes');
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
