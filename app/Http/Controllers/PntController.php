<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PntController extends Controller
{
    public function index(){
        $title = 'Peoplentech View';
        return view('peoplentechView',compact('title'));
    }
    public function about(){
        $title = 'Peoplentech About';
        $details = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quia expedita nisi molestiae! Quisquam omnis accusantium consequuntur cum obcaecati expedita.';
        return view('about',compact('title','details'));
    }
    public function form(){
        return view('form');
    }
    public function preview(Request $request){
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        return view('preview', compact('name','email','phone'));
    }
}
