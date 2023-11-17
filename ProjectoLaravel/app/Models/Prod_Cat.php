<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Cat extends Model
{
    use HasFactory;

    protected $table = "tbl_prod_cat";
    protected $primaryKey1 = "ProdId";
    protected $primaryKey2 = "CatId";

    public $timestamps = true;

    // Relaciones de (n:1)
    public function producto() {
        return $this->belongsTo(Producto::class, "Prod_Id");
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, "Cat_Id");
    }


}
