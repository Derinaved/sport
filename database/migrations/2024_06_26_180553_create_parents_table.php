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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');
            $table->index('student_id', 'parents_student_idx');
            $table->foreign('student_id', 'parents_fk')->on('students')->references('id');

            $table->string('name');
            $table->string('phone');
            $table->string('job');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
