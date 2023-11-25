<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'tbl_administradores';
    protected $primaryKey = 'Admin_Id';

    public $timestamps = true;
}
