<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaVenta extends Model
{
    use HasFactory;
    protected $table = "tbl_factura_venta";

    protected $fillabel = ['nombreUser', 'numRuc'];
}
