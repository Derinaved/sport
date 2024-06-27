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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('groups_id');
            $table->index('groups_id', 'student_group_idx');
            $table->foreign('groups_id', 'student_group_fk')->on('groups')->references('id');


            $table->string('name');
            $table->string('spec');
            $table->date('birthday');
            $table->string('address');
            $table->string('phone');
            $table->integer('inn')->unique();
            $table->integer('pasport')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
