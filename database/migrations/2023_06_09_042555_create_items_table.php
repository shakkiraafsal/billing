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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('itemname');
            $table->text('itemcode');
            $table->text('itemcategory');
            $table->unsignedBigInteger('itemhsn');
            $table->Integer('itemalertqty');
            $table->float('itemsp');
            $table->float('itempp');
            $table->float('itemmrp');
            $table->date('itemfdate')->nullable();
            $table->date('itemexpdate')->nullable();
            $table->text('itembunit')->nullable();
            $table->text('itemsunit')->nullable();
            $table->text('itemsunitvalue')->nullable();
            $table->tinyInteger("itemstatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
