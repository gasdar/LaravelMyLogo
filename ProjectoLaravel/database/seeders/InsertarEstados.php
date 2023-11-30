<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarEstados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tbl_estados')->insert(array(
            ['Estado_Nombre' => 'Habilitado'],
            ['Estado_Nombre' => 'Deshabilitado']
        ));
    }
}
