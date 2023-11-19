<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "tbl_productos";
    protected $primaryKey = "Prod_Id";

    public $timestamps = true;

    // Relaciones de (1:n)
    public function prodSuc() {
        return $this->hasMany(Prod_Suc::class, "ProdId", "Prod_Id");
    }

    public function prodCat() {
        return $this->hasMany(Prod_Cat::class, "ProdId", "Prod_Id");
    }

}
