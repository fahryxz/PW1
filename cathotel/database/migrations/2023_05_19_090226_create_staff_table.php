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
        Schema::dropIfExists('staff');
        Schema::create('staff', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->string('namastaff',100);
            $table->string('alamatstaff',100);
            $table->string('emailstaff',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};