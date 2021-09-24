<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return response()->json(["message" => "hello world", "author" => ['Patrick', 'Joseph', 'Anthony']], 201);
    }

    public function products(){
        return response()->json('Products');
    }

    public function store(){
        return response()->json('store');
    }

    public function show($id){
        return response()->json('show specific product');
    }

    public function update($id){
        return response()->json('update specific product');
    }

    public function delete($id){
        return response()->json('delete product');
    }
}
