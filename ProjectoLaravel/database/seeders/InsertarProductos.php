<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("tbl_productos")->insert(array(
            ['Prod_Nombre' => 'Lámpara de Mesa', 'Prod_Descripcion' => 'Lámpara moderna para iluminación en el hogar', 'Prod_Precio' => '3200.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Sofá de Cuero', 'Prod_Descripcion' => 'Sofá de cuero, 3 plazas', 'Prod_Precio' => '250000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Cafetera Automática', 'Prod_Descripcion' => 'Cafetera programable para café fresco', 'Prod_Precio' => '30000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Juego de Sábanas', 'Prod_Descripcion' => 'Sábanas de algodón suave, juego de 4 piezas', 'Prod_Precio' => '22000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Smart TV 55 pulgadas', 'Prod_Descripcion' => 'Televisor 4K Smart', 'Prod_Precio' => '210000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Mesa de Centro', 'Prod_Descripcion' => 'Mesa de centro con diseño especial', 'Prod_Precio' => '130000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Jarrón de Cerámica', 'Prod_Descripcion' => 'Jarrón decorativo de cerámica en blanco', 'Prod_Precio' => '4500.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Aspiradora Robot', 'Prod_Descripcion' => 'Aspiradora robotizada para limpieza', 'Prod_Precio' => '14000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Reloj de Pared', 'Prod_Descripcion' => 'Reloj de pared con diseño rústico', 'Prod_Precio' => '7000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Cortinas Opacas', 'Prod_Descripcion' => 'Cortinas de oscurecimiento para habitaciones', 'Prod_Precio' => '26000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Refrigerador', 'Prod_Descripcion' => 'Refrigerador de material inoxidable', 'Prod_Precio' => '450000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Espejo Decorativo', 'Prod_Descripcion' => 'Espejo de pared con marco sencillo', 'Prod_Precio' => '3800.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Set Cocina', 'Prod_Descripcion' => 'Set de ollas y sartenes', 'Prod_Precio' => '32000.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Almohada Sencilla', 'Prod_Descripcion' => 'Almohada de algodon sencilla', 'Prod_Precio' => '3500.00', 'Prod_Estado' => '1'],
            ['Prod_Nombre' => 'Audifonos Alambricos', 'Prod_Descripcion' => 'Audifonos Alambricos Negro', 'Prod_Precio' => '4000.00', 'Prod_Estado' => '1']
        ));

        /*
        INSERT INTO tbl_productos (Prod_Nombre, Prod_Descripcion, Prod_Precio) VALUES
            ('Lámpara de Mesa', 'Lámpara moderna para iluminación en el hogar', 3200.00),
            ('Sofá de Cuero', 'Sofá de cuero, 3 plazas', 250000.00),
            ('Cafetera Automática', 'Cafetera programable para café fresco', 30000.00),
            ('Juego de Sábanas', 'Sábanas de algodón suave, juego de 4 piezas', 22000.00),
            ('Smart TV 55 pulgadas', 'Televisor 4K Smart', 210000.00),
            ('Mesa de Centro', 'Mesa de centro con diseño especial', 130000.00),
            ('Jarrón de Cerámica', 'Jarrón decorativo de cerámica en blanco', 4500.00),
            ('Aspiradora Robot', 'Aspiradora robotizada para limpieza', 14000.00),
            ('Reloj de Pared', 'Reloj de pared con diseño rústico', 7000.00),
            ('Cortinas Opacas', 'Cortinas de oscurecimiento para habitaciones', 26000.00),
            ('Refrigerador', 'Refrigerador de material inoxidable', 450000.00),
            ('Espejo Decorativo', 'Espejo de pared con marco sencillo', 3800.00),
            ('Set Cocina', 'Set de ollas y sartenes', 32000.00),
            ('Almohada Sencilla', 'Almohada de algodon sencilla', 3500.00),
            ('Audifonos Alambricos', 'Audifonos Alambricos Negro', 4000.00);
        */
    }

    
}
