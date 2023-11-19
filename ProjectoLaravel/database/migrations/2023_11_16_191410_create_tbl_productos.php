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
        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->increments('Prod_Id');
            $table->string('Prod_Nombre', 50);
            $table->string('Prod_Descripcion', 200);
            $table->decimal('Prod_Precio', $precision = 10, $scale = 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_productos');
    }
};
