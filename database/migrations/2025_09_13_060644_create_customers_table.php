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
    Schema::create('customer', function (Blueprint $table) {
        $table->bigIncrements('Id_customer');
        $table->string('Nama');
        $table->string('Email')->unique();
        $table->string('Password');
        $table->string('Nomor_telepon')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
