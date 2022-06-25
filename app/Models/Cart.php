<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='tbl_cart';
    protected $fillable=[
    'id'
    ];
    // protected $table="tbl_producto";
    // // protected $primarykey="id";
    // protected $fillable=[
    //     'id',
    //     'nombre'
    // ];
}
