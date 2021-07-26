<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \App\Models\Book;

use Illuminate\Http\Request;

class BookshopController extends Controller
{ 
    public function index(){
        $data['bookshops'] = DB::table('bookshops')->get();
        return view('bookshop.index',$data);
    }
    public function create(){
        return view('bookshop.create');
    }
    public function store(Request $request){
        $data['name'] = $request->name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('bookshops')->insert($data);
        return redirect()->route('bookshop.index'); 
    }
    public function edit($id){
        $data['bookshop'] = DB::table('bookshops')->find($id);
        return view('bookshop.edit',$data);
    }
    public function update(Request $request,$id){
        $data['name'] = $request->name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('bookshops')->where('id',$id)->update($data);
        return redirect()->route('bookshop.index');
    }
    public function delete($id){
        DB::table('bookshops')->where('id',$id)->delete();
        return redirect()->route('bookshop.index');
    }
}
