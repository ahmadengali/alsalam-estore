<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {

$result = DB::table('categories') -> get();

    return view('welcome' , ['categories' => $result]);
});



Route::get('/about', function () {
    return view('about');
});




Route::get('/product/{catid?}', function ($catid = null) {

b:if($catid == null) {

    $result = DB::table('products') -> get();
    return view('product', ['products' => $result]);
}

else{  
$result = DB::table('products')-> where('category_id' , $catid) -> get();
return view('product', ['products' => $result]);
}
    
});



Route::get('/category', function () {
    $result = DB::table('categories') -> get();

    return view('category' , ['categories' => $result]);
});









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
