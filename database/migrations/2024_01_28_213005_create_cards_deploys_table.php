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
        Schema::create('cards_deploys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')
                ->references('id')
                ->on('cards')
                ->onDelete('cascade');
            $table->foreignId('deploy_id')
                ->references('id')
                ->on('deploys')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards_deploys');
    }
};
