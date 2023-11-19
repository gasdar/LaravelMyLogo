<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "tbl_categorias";
    protected $primaryKey = "Cat_Id";

    public $timestamps = true;

    // Relaciones de (1:n)
    public function prodCat() {
        return $this->hasMany(Prod_Cat::class, "CatId", "Cat_Id");
    }

}
