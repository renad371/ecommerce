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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('ProductId');
            $table->String('ProductName');
            $table->float('Price');
            $table->integer('Qty');
            $table->float('Tax');
            $table->float('Total');
            $table->float('Desc');
            $table->float('Net');
            $table->integer('UserId');
            $table->integer('UserName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
