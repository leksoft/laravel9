<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $PostName = "หน้าแรกบทความ";
        $CountPost = "จำนวนบทความ 100 หน้า"; 
        return view('post.index',compact('PostName','CountPost'));
    }
}

