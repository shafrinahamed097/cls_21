<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1()
    {
        return "Response Hello World";
    }

    function demo2()
    {
         return "Demo 2";
    }

    function demo3()
    {
        return "Demo3";
    }

    function demo4()
    {
        return response()->json([
            "name"=>"OSTAD",
            "Batch"=>"03",
            "Course"=>"Laravel"

        ]);
    }
    
}
    

