<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home',['name' => '<span style="color:green;font-style:Italic;" >Hoàng Hữu Hùng</span>']);
    }

}
