<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = "tbl_sucursales";
    protected $primaryKey = "Suc_Id";

    public $timestamps = true;

    // Relaciones de (1:n)
    public function prodSuc(){
        return $this->hasMany(Prod_Suc::class, "SucId", "Suc_Id");
    }

}
