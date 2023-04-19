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
        Schema::create('employee_attendance_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('attend_date');
            $table->string('intime');
            $table->string('outtime')->nullable();
            $table->string('late_status');
            $table->string('total_duty')->default("0"); // Change the data type to string
            $table->unsignedTinyInteger('status')->comment('0=Inactive,1=Active')->default(1);
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
        Schema::dropIfExists('employee_attendance_entries');
    }
};
