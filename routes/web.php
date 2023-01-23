<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/',function(){
    return view('weblcome');
});

Route::get('/posts',[PostsController::class,'index']);

Route::get('/aboute',function(){
    
    return view('aboute');

});
Route::get('/home',function(){

    return view('home');

});




