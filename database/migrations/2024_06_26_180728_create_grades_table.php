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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');
            $table->index('student_id', 'parents_student_idx');
            $table->foreign('student_id', 'grades_user_fk')->on('students')->references('id');

            $table->unsignedBigInteger('user_id');
            $table->index('user_id', 'grades_user_idx');
            $table->foreign('user_id', 'grades_fk')->on('users')->references('id');

            $table->integer('score');
            $table->boolean('test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
