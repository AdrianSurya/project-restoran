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
    Schema::create('data_order', function (Blueprint $table) {
        $table->bigIncrements('Id_order');
        $table->unsignedBigInteger('Id_customer');
        $table->unsignedBigInteger('Id_admin');
        $table->dateTime('Tgl_order');
        $table->string('Type_order')->nullable();
        $table->enum('Status_order', ['baru','diproses','selesai','dibatalkan'])->default('baru');
        $table->decimal('Total_harga', 10, 2);

        $table->foreign('Id_customer')->references('Id_customer')->on('customer')->onDelete('cascade');
        $table->foreign('Id_admin')->references('Id_admin')->on('admin')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orders');
    }
};
