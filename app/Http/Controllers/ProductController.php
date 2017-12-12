<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categorias;
class ProductController extends Controller
{
    public function index() {
        $products = Products::all();
        $categorias = Categorias::all();
        return view('layout.app', compact('products', 'categorias'));
    }

    public function show($id) {
        $products = Products::find($id);
        return view('layout.detalle', ['products'=>$products]);
    }

}
