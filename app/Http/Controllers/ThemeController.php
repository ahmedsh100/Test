<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;
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

        //!Create
        // $contact = Contact::find(2);
        // $contact->create([
        //     "first_name"=>"Mohamed",
        //     "last_name"=>"ahmed",
        //     "email"=>"mohamed@yaho.com",
        //     "message"=>"message1111111111",
        // ]);

        //!Update
        // $contact = Contact::find(2);
        // $contact->update([
        //     "first_name"=>"Mohamed",
        //     "last_name"=>"ahmed",
        //     "email"=>"mohamed@yaho.com",
        //     "message"=>"message1111111111",
        // ]);

        //!Delete
        // $contact = Contact::find(2);
        // $contact ->delete();

        $category = Category::all();
        return view('theme.contact',compact('category'));
    }

    public function store(StoreContactRequest $request){
        $valedated_data = $request->validated();


        // dd($request->all());
        // $valedated_data = $request->validate([
        //     "first_name"=>"required|string|max:8",
        //     "last_name"=>"required|string|max:8",
        //     "email"=>"required|email|max:25",
        //     "message"=>"required|max:80",
        // ]);

        Contact::create($valedated_data);
        return back()->with("Status","Sussusfully!");
    }
}
