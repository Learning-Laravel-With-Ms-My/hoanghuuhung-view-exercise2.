<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        return Fruit::all();
    }
    public function getDetails(){
        return view('fruits',['fruits'=>$this->getFruits()]);
    }
}
