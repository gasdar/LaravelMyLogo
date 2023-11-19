<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarProdCat extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tbl_prod_cat')->insert(array(
            ['ProdId' => 1, 'CatId' => 1],
            ['ProdId' => 1, 'CatId' => 3],
            ['ProdId' => 2, 'CatId' => 1],
            ['ProdId' => 3, 'CatId' => 1],
            ['ProdId' => 3, 'CatId' => 2],
            ['ProdId' => 4, 'CatId' => 1],
            ['ProdId' => 5, 'CatId' => 2],
            ['ProdId' => 6, 'CatId' => 1],
            ['ProdId' => 6, 'CatId' => 3],
            ['ProdId' => 7, 'CatId' => 1],
            ['ProdId' => 7, 'CatId' => 3],
            ['ProdId' => 8, 'CatId' => 1],
            ['ProdId' => 8, 'CatId' => 2],
            ['ProdId' => 9, 'CatId' => 1],
            ['ProdId' => 9, 'CatId' => 3],
            ['ProdId' => 10, 'CatId' => 1],
            ['ProdId' => 11, 'CatId' => 1],
            ['ProdId' => 12, 'CatId' => 1],
            ['ProdId' => 12, 'CatId' => 3],
            ['ProdId' => 13, 'CatId' => 1],
            ['ProdId' => 14, 'CatId' => 1],
            ['ProdId' => 15, 'CatId' => 2]
        ));

        /*
        INSERT INTO tbl_prod_cat (ProdId, CatId) VALUES
            (1, 1),
            (1, 3),
            (2, 1),
            (3, 1),
            (3, 2),
            (4, 1),
            (5, 2),
            (6, 1),
            (6, 3),
            (7, 1),
            (7, 3),
            (8, 1),
            (8, 2),
            (9, 1),
            (9, 3),
            (10, 1),
            (11, 1),
            (12, 1),
            (12, 3),
            (13, 1),
            (14, 1),
            (15, 2);
        */
    }
}
