<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    $products=\DB::select("select * from products");
    return response()->json([
        "status" => "success",
        "data" => $products
    ],200);
    }

}

