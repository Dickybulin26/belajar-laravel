<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->integer('id_user', true, false,)->nullable(false);
            $table->string('username', 200)->unique('IdXUser')->nullable(false);
            $table->text('password')->nullable(false);
            $table->enum('role', ['admin', 'operator'])->nullable(false)->default('operator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_user');
    }
};
