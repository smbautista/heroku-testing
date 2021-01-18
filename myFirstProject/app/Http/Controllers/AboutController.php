<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view ('about');
        
    }

    // POST
    public function store(Request $request){
        About::create(array(
            'name'=>$request->input('name'),
            'password'=>$request->input('password')
        ));
        return view('about');
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
