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
        Schema::create('report_groups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');

            $table->unsignedBigInteger('group_id');
            $table->index('group_id', 'report_group_idx');
            $table->foreign('group_id', 'report_group_fk')->on('groups')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_groups');
    }
};
