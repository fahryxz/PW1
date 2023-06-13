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
        // Schema::dropIfExists('hewans');
        Schema::create('hewans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            
            $table->uuid('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('namaHewan', 50);
            $table->string('jenisHewan', 50);
            $table->string('jkHewan', 50);
            $table->string('breedHewan', 100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};