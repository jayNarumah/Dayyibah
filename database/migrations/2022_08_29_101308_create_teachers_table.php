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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained();
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('branch_id')->constrained();
            $table->foreignId('specialization_id')->constrained();
            $table->foreignId('qualification_id')->constrained();
            $table->foreignId('area_taught_id')->constrained();
            $table->foreignId('marital_status_id')->constrained();
            $table->string('business');
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
        Schema::dropIfExists('teachers');
    }
};
