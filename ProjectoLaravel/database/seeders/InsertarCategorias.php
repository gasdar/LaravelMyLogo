<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tbl_categorias')->insert(array(
            ['Cat_Nombre' => 'Hogar'],
            ['Cat_Nombre' => 'Electrónica'],
            ['Cat_Nombre' => 'Adorno']
        ));

        /*
        INSERT INTO tbl_categorias (Cat_Nombre) VALUES
            ('Hogar'),
            ('Electrónica'),
            ('Adorno');
        */
    }
}
