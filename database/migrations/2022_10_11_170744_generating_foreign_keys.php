<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function ($table) {
            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->references('id')
                ->on('employee_categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreignId('officeDepartment_id')
                ->nullable()
                ->constrained()
                ->references('id')
                ->on('office_departments')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
