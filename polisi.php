<?php
//public function up(): void
{
    Schema::create('polisi', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('pangkat');
        $table->string('nrp')->unique(); // nomor registrasi polisi
        $table->string('jabatan')->nullable();
        $table->timestamps();
    });
}
?>