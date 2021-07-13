<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct(){
        return view('product', ['list' => Products::paginate(3)]);
    }
}
