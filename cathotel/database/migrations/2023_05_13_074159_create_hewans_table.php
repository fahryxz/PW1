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
        Schema::create('hewans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            
            $table->uuid('idCast');
            $table->string('namaHewan', 50);
            $table->string('jenisHewan', 50);
            $table->string('breedHewan', 100);
            $table->timestamps();
            // idHewan, idCust, namaHewan, jenisHewan, breedHewan
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