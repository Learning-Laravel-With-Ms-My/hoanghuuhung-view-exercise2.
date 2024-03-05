<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

        public function index(Request $request)
        {
            return view('form');
        }
        // public function post(Request $request)
        // {
        //     dd($request->all());
        // }
        // public function post(Request $request){
        //     // dd($request->input('username'));
        //     // $name = $request->input();
        //     $name = $request->input('password','123456');
        //     dd($name);
        // }
        public function store(Request $request){
            return back()->withInput($request->only('username'));
        }
}
