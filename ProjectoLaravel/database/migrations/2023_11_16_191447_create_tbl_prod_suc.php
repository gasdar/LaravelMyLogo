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
        Schema::create('tbl_prod_suc', function (Blueprint $table) {
            $table->unsignedInteger('ProdId');
            $table->unsignedInteger('SucId');
            $table->unsignedSmallInteger('Stock');
            $table->primary(['ProdId', 'SucId']);

            // Relaciones
            $table->foreign('ProdId')->references('Prod_Id')->on('tbl_productos');
            $table->foreign('SucId')->references('Suc_Id')->on('tbl_sucursales');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prod_suc');
    }
};
