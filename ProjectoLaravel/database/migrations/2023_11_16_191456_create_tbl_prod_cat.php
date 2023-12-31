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
        Schema::create('tbl_prod_cat', function (Blueprint $table) {
            $table->unsignedInteger('ProdId');
            $table->unsignedInteger('CatId');
            $table->primary(['ProdId', 'CatId']);

            // Relaciones
            $table->foreign('ProdId')->references('Prod_Id')->on('tbl_productos');
            $table->foreign('CatId')->references('Cat_Id')->on('tbl_categorias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prod_cat');
    }
};
