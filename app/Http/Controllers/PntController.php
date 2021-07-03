<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //dd($request->all());
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;
        $data = [];
        $data['Name'] = $request->full_name;
        $data['Email'] = $request->email_address;
        $data['Phone'] = $request->phone_number;
        // DB::table('abouts')->insert($data);
        // dd($data);
        DB::table('abouts')->insert($data);
        //$result = DB::table('abouts')->get();
        //dd($result);
        // $name = $result->Name;
        // $email = $result->Email;
        // $phone = $result->Phone;
        return redirect()->route('show');
    }
    public function show(){
        $result = DB::table('abouts')->get();
        return view('preview', compact('result'));
    }
}
