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
        Schema::create('report_events', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');
            $table->index('student_id', 'report_student_idx');
            $table->foreign('student_id', 'report_student_fk')->on('students')->references('id');

            $table->unsignedBigInteger('event_id');
            $table->index('event_id', 'report_event_idx');
            $table->foreign('event_id', 'report_fk')->on('events')->references('id');

            $table->string('prize');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_events');
    }
};
