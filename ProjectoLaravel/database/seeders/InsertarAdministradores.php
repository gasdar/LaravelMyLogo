<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarAdministradores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tbl_administradores')->insert(array(
            ['Admin_Nombre' => 'Profesor', 'Admin_Password' => '12345'],
            ['Admin_Nombre' => 'Mauricio', 'Admin_Password' => '12345'],
            ['Admin_Nombre' => 'Eliu', 'Admin_Password' => '12345']
        ));
    }
}
