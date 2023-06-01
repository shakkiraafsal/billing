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
        Schema::create('hsns', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hsncode');
            $table->text('hsndescp');
            $table->text('hsnunit');
            $table->text('hsntaxmode');
            $table->tinyInteger("hsnstatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hsns');
    }
};
