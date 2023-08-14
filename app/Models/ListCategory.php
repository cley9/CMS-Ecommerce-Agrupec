<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListCategory extends Model
{
    // use HasFactory;
    protected $table="tbl_list_catetgory";
    // protected $primarykey="id";
    protected $fillable=[
        'id',
        'nombre'
    ];
// para que no permita esos campos
    public $timestamps=false;
    // use HasFactory;
}
