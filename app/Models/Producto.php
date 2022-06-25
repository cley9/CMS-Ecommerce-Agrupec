<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="tbl_producto";
    // protected $primarykey="id";
    protected $fillable=[
        'id',
        'nombre'
    ];
// para que no permita esos campos
    public $timestamps=false;
    // use HasFactory;
}
