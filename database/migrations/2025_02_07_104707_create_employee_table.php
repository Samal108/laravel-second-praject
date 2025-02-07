<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        

        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name',45);
            $table->float('emp_salary');
            $table->unsignedBigInteger('address_id');
           $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
