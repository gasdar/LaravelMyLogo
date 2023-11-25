<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Suc extends Model
{
    use HasFactory;

    protected $table = "tbl_prod_suc";
    protected $primaryKey1 = "ProdId";
    protected $primaryKey2 = "SucId";

    public $timestamps = true;

    // Relaciones de (n:1)
    public function producto() {
        return $this->belongsTo(Producto::class, "ProdId");
    }

    public function sucursal() {
        return $this->belongsTo(Sucursal::class, "SucId");
    }

}
