<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(int $id)
    {
        $pr = Product::find($id);


        return view('layouts.product',['pr'=>$pr]);
    }
}
