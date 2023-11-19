<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_sucursales')->insert(array(
            ['Suc_Region' => 'Metropolitana', 'Suc_Direccion' => 'Las Ramas 780'],         
            ['Suc_Region' => 'Valparaiso', 'Suc_Direccion' => 'Aguas Claras 500'],         
            ['Suc_Region' => 'Metropolitana', 'Suc_Direccion' => 'San Antonio 690']
        ));

        /*
        INSERT INTO tbl_sucursales (Suc_Region, Suc_Direccion) VALUES
            ('Metropolitana', 'las ramas 780'),
            ('Valparaiso', 'aguas claras 500'),
            ('Metropolitana', 'San Antonio 690');
        */
    }

    
}
