<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // Q1
        $products = DB::table('product_c_s')->get();

        // Q2
        $productCondition = DB::table('product_c_s')->where('price','>',100)->where('price','<',350)->orderBy('name','asc')->get();

        // Q3
        $dixpre= DB::table('product_c_s')->limit(10)->get();

        // Q4

        $categorieId = DB::table('product_c_s')->where('categorie_id',3)->get();

        // Q5
        $numtotal = DB::table('product_c_s')->count();

        return view('product',compact('products','productCondition','dixpre','categorieId','numtotal'));
    }
}
