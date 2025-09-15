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
    Schema::create('pembayaran', function (Blueprint $table) {
        $table->bigIncrements('Id_pembayaran');
        $table->unsignedBigInteger('Id_order');
        $table->string('Metode_pembayaran');
        $table->dateTime('Tgl_pembayaran')->nullable();

        $table->foreign('Id_order')->references('Id_order')->on('data_order')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
