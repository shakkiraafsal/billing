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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->text('pname');
            $table->text('pcode')->nullable();
            $table->text('pgst');
            $table->bigInteger('pmobile');
            $table->text('padress')->nullable();
            $table->text('pemail')->nullable();
            $table->tinyInteger("pstatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
