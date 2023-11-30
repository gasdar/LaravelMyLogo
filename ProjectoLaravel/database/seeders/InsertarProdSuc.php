<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarProdSuc extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tbl_prod_suc')->insert(array(
            ['ProdId' => 1, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 8],
            ['ProdId' => 2, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 3],
            ['ProdId' => 4, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 12],
            ['ProdId' => 5, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 7],
            ['ProdId' => 8, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 4],
            ['ProdId' => 12, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 14],
            ['ProdId' => 14, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 23],
            ['ProdId' => 15, 'SucId' => 1, 'EstadoId' => 1, 'Stock' => 17],
            ['ProdId' => 1, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 15],
            ['ProdId' => 3, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 5],
            ['ProdId' => 5, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 8],
            ['ProdId' => 6, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 3],
            ['ProdId' => 7, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 9],
            ['ProdId' => 8, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 14],
            ['ProdId' => 11, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 2],
            ['ProdId' => 14, 'SucId' => 2, 'EstadoId' => 1, 'Stock' => 12],
            ['ProdId' => 2, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 15],
            ['ProdId' => 3, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 24],
            ['ProdId' => 4, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 5],
            ['ProdId' => 5, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 16],
            ['ProdId' => 6, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 8],
            ['ProdId' => 7, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 3],
            ['ProdId' => 8, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 15],
            ['ProdId' => 9, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 5],
            ['ProdId' => 10, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 7],
            ['ProdId' => 11, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 16],
            ['ProdId' => 12, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 3],
            ['ProdId' => 13, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 9],
            ['ProdId' => 14, 'SucId' => 3, 'EstadoId' => 1, 'Stock' => 7]
        ));

        /*
        INSERT INTO tbl_prod_suc (ProdId, SucId, Stock) VALUES
            (1, 1, 8),
            (2, 1, 3),
            (4, 1, 12),
            (5, 1, 7),
            (8, 1, 4),
            (12, 1, 14),
            (14, 1, 23),
            (15, 1, 17),
            (1, 2, 15),
            (3, 2, 5),
            (5, 2, 8),
            (6, 2, 3),
            (7, 2, 9),
            (8, 2, 14),
            (11, 2, 2),
            (14, 2, 12),
            (2, 3, 15),
            (3, 3, 24),
            (4, 3, 5),
            (5, 3, 16),
            (6, 3, 8),
            (7, 3, 3),
            (8, 3, 15),
            (9, 3, 5),
            (10, 3, 7),
            (11, 3, 16),
            (12, 3, 3),
            (13, 3, 9),
            (14, 3, 7);
        */
    }
}
