<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $fillable = [
        'id_product', 'product_name', 'product_pict', 'category', 'prize'
    ];
}
