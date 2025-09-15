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
    Schema::create('detail_order', function (Blueprint $table) {
        $table->bigIncrements('Id_detail');
        $table->unsignedBigInteger('Id_order');
        $table->unsignedBigInteger('Id_menu');
        $table->integer('Quantity');
        $table->decimal('Subtotal', 10, 2);

        $table->foreign('Id_order')->references('Id_order')->on('data_order')->onDelete('cascade');
        $table->foreign('Id_menu')->references('Id_menu')->on('menu')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};
