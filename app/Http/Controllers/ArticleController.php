<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajout(Request $request){
        dd(auth()->user());
        Article::create([
         'title'=>$request->title,
         'content'=>$request->content,
         'user_id'=> auth()->user()->id,

        ]);
        return back();      
}
    public function reagir(){
       
        return view('reagir',);
    
    }
}