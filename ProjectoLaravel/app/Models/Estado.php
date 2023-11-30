<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $table = "tbl_estados";
    protected $primaryKey = "Estado_Id";

    public $timestamps = true;

    // Relaciones uno a mucho
    public function prodSuc() {
        $this->hasMany(Prod_Suc::class, "EstadoId", "Estado_Id");
    }

    use HasFactory;
}
