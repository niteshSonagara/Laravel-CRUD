<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $categories=Categories::get();
        
        return view('categories.list',['cat'=>$categories]);
    }

    public function create(){
        return view('categories.new');
    }

    public function store(Request $request){
        $category=new Categories();
        $category->title=$request->title;
        $category->save();
        return redirect('/');
    }

    public function edit($id){
        $category = Categories::where('id', $id)->first();

        return view('categories.edit',['cat'=>$category]);
    }

    public function update(Request $request,$id){
        $category=Categories::where('id',$id)->first();

        $category->title = $request->title;
        
        $category->save();

        return redirect('/');
    }
    
    public function destroy($id){
        $category=Categories::where('id',$id)->first();
        $category->delete();
        return redirect('/');
    }

}
