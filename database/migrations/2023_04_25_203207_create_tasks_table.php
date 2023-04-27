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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('membre_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->text('description')->nullable();
            $table->Integer('status')->default(0);
            $table->date('deadline');
            $table->integer('id_user');
            $table->timestamps();

            $table->foreign('membre_id')->references('id')->on('membres')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
