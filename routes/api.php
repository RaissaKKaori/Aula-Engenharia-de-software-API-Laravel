<?php

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\model;
use Illuminate\Support\Facades\Route;
use App\models\Product;
use App\models\Category;

Route::get('/user', function(Request $requestt){
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/products' , function (Request $request) {
    $product = new Product();
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description' );
    $product->save();

    return response()->json($product);
});

Route::post('/categorias' , function (Request $request) {
    $categoria = new Category();
    $categoria->name = $request->input('name');
    $categoria->description = $request->input('description' );
    $categoria->save();

    return response()->json($product);
});

Route::get('/products', function(){
    $product = Product::all();
    return response()->json($product);
});

Route::get('/categorias', function(){
    $categoria = Category::all();
    return response()->json($categoria);
});

Route::patch('/products/{id}', function($id, Request $request){
    $product = Product::find($id);
    if($request->input('name')!== null){
        $product->name = $request->input('name');
    }
    if($request->input('price') !== null){
        $product->price = $request->input('price');
    }
    if($request->input('description') !== null){
        $product->description = $request->input('description');
    }

    $product->save();
    return response()->json($product);
});

Route::delete("/delProducts/{id}", function($id, Request $request){
    $product = Product::find($id);
    $product -> delete();
    return response() -> json(["mesage=>'Registro deletado'"]);
});

Route::delete('/delCategories/{id}', function($id, Request $request){
    $category = Category-> find($id);
    $category ->delete();
    return response()->json(["mesage=>'Categoria deletado'"]);
});

