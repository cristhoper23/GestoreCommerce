<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Products;
class CategoryController extends Controller
{
    public function cate() {
        $categoria = Products::all();
        $datos = array('categorias' => $categoria);
        return view('layout.tecnologia',$datos);
    }

    public function hogar() {
        $categoria = Products::all();
        $datos = array('categorias' => $categoria);
        return view('layout.hogar',$datos);
    }
}
