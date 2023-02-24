<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
class FrontendController extends Controller
{

    public function index(){

        $posts = Post::paginate(20);
        return view('index',compact('posts')); 
    }
    public function aboute(){
        return view('aboute');
    }
}
