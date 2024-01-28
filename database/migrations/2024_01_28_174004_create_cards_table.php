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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('completed')->nullable();
            $table->enum('intervention_level', ['nivel_1', 'nivel_2', 'nivel_3', 'melhoria']);
            $table->enum('priority', ['priority_1', 'priority_2', 'priority_3', 'melhoria']);
            $table->timestamps();
            $table->foreignId('board_id')->nullable()
                ->references('id')
                ->on('boards')
                ->onUpdate('NO ACTION')
                ->onDelete('SET NULL');
            $table->foreignId('area_id')->nullable()
                ->references('id')
                ->on('areas')
                ->onUpdate('NO ACTION')
                ->onDelete('SET NULL');
            $table->foreignId('status_id')->nullable()
                ->references('id')
                ->on('statuses')
                ->onUpdate('NO ACTION')
                ->onDelete('SET NULL');
            $table->dateTime('status_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
