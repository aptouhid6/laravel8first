<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index(){
        $authors = DB::table('authors')->get();
        return view('author/index',compact('authors'));
    }
    public function create(){
        return view('author/create');
    }
    public function store(Request $request){
        //dd($request->all());
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['date_of_birth'] = $request->date_of_birth;
        //dump($data);
        DB::table('authors')->insert($data);
        return redirect()->route('author.index');
    }
    public function edit($id){
        $author = DB::table('authors')->where('id',$id)->first();
        return view('author/edit',compact('author'));
    }
    public function update(Request $request,$id){
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['date_of_birth'] = $request->date_of_birth;
        DB::table('authors')->where('id',$id)->update($data);
        return redirect()->route('author.index');
    }
    public function destroy($id){
        //DB::table('authors')->where('id',$id)->delete();
        DB::table('authors')->delete($id);
        return redirect()->route('author.index');
    }
}
