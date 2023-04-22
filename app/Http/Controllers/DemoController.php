<?php

namespace App\Http\Controllers;
use App\Models\Calculation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function calc($a,$b){
         $mul = $a * $b;
        return view('calc', compact('a','b','mul'));        
    }

    public function calculation()
    {
        $calculations = Calculation::all();
        return view('calculation', ['calculations' => $calculations]);
    }
}
