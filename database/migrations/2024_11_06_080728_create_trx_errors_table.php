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
        Schema::create('trx_errors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('aplikasi_id')->constrained('aplikasi')->onDelete('cascade');;
            $table->bigInteger('jenis_error_id')->constrained('m_jenis_error')->onDelete('cascade');;
            $table->text('solusi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_errors');
    }
};
