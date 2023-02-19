<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentsController;

use App\Http\Controllers\ProductsController; 
use App\Http\Controllers\EmailController; 
use App\Models\Order ; 
use App\Models\Product ; 

Route::get('send-email', [EmailController::class, 'send_email']);

//Soft Delete and Data Restore 
Route::get('posts/trashed', [PostsController::class, 'trashed'])->name('posts.trashed');
Route::get('posts/restore/{id}', [PostsController::class, 'restore'])->name('posts.restore');
Route::get('posts/restore-all', [PostsController::class, 'restoreAll'])->name('posts.restoreAll');

//products
Route::get('products',[ProductsController::class,'index']) ; 
Route::get('products/create',[ProductsController::class,'create'])->name('products.create') ; 
Route::post('products/store',[ProductsController::class,'store'])->name('products.store') ; 
Route::get('products/edit/{id}',[ProductsController::class,'edit'])->name('products.edit') ; 
Route::post('products/update/{id}',[ProductsController::class,'update'])->name('products.update') ; 

Route::delete('products/destroy/{id}',[ProductsController::class,'destroy'])->name('products.destroy') ; 



Route::get('/order/{id}',function($id){
    $order = Order::find($id) ; 
    return $order->rProduct()->orderBy('name','desc')->get(); 
});

Route::get('/order/product/{id}',function($id){
    $order = Product::find($id) ; 
    return $order->rOrder()->orderBy('id','desc')->get(); 
});



//StudentsController
Route::get('student/all',[StudentsController::class,'index'])->name('student') ; 



//PostController
Route::get('/posts',[PostsController::class,'index'])->name('posts.index'); // แสดงข้อมูลทั้งหมด
Route::get('create',[PostsController::class,'create'])->name('create') ;  //ฟอร์มเพิ่มข้อมูลใหม่
Route::post('store',[PostsController::class,'store'])->name('store') ;  //บันทึกข้อมูล
Route::get('post/edit/{id}',[PostsController::class,'edit'])->name('edit') ; //ฟอร์มแก้ไข
Route::post('post/update/{id}',[PostsController::class,'update'])->name('update'); //บันทึกการแก้ไข
Route::get('post/destroy/{id}',[PostsController::class,'destroy'])->name('destroy') ; //ลบข้อมูล

Route::get('post/show/{id}',[PostsController::class,'show'])->name('show') ; //แสดงรายละเอียดข้อมูล


//CategoryController 
Route::get('/category',[CategoryController::class,'index']); // แสดงข้อมูลทั้งหมด
Route::get('category/create',[CategoryController::class,'create'])->name('category.create') ;  //ฟอร์มเพิ่มข้อมูลใหม่
Route::post('categorystore',[CategoryController::class,'store'])->name('category.store') ;  //บันทึกข้อมูล
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit') ; //ฟอร์มแก้ไข
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update'); //บันทึกการแก้ไข

Route::get('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy') ; //ลบข้อมูล



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//HomeController
Route::get('/',[HomeController::class,'index']);
Route::get('/aboute',[HomeController::class,'aboute']);
