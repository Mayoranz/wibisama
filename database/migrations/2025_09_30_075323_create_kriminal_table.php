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
        Schema::create('kriminal', function (Blueprint $table) {
           $table->id();
            $table->string('nama',50);
            $table->int ('usia',30);
            $table->varchar('kasus',1000);
            $table->varchar('lama hukuman',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriminal');
    }
};
