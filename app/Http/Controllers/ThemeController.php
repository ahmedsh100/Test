<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about(){
        return view('theme.about');
    }
    public function services(){
        return view('theme.services');
    }
    public function contact(){
        return view('theme.contact');
    }

    public function store(Request $request){
        // dd($request->all());
        $valedated_data = $request->validate([
            "first_name"=>"required|string|max:8",
            "last_name"=>"required|string|max:8",
            "email"=>"required|email|max:25",
            "message"=>"required|max:80",
        ]);
    }
}
