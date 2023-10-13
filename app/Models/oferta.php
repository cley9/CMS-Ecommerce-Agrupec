<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oferta extends Model
{
    // use HasFactory;
    protected $table="tbl_ofertas";
    // protected $primarykey="id";
    protected $fillable=[
        'id',
        'fecha_inico',
        'fecha_fin'
    ];
// para que no permita esos campos
    // public $timestamps=false;

}
