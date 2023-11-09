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
        //
        Schema::create('logs', function (Blueprint $table) {
            $table->integer('id_logs', true,false)->nullable(false);
            $table->date('tanggal')->nullable(false)->default('2023-01-01');
            $table->text('logs')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('logs');
    }
};
