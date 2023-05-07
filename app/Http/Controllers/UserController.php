<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function firstpage(){
        $user= User::all();
        return view('firstpage',compact('user'));
    }
    public function register(){

        return view('register');
    }
    public function registerPost(Request $request){
        

        $user= new User();
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->sexe = $request->sexe;
        $user->birth_date = $request->birth_date;
        $user->password = Hash::make($request->password);
        $user->save();
    
           return back()->with('success','Inscription reussi!');
    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
       $credetials=[
           'email'=>$request->email,
           'password'=>$request->password,
       ];

        if(Auth::attempt($credetials)){
            return redirect('/content{{id}}')->with('success','connexion');
        }else
        return back()->with('error','Error Email or password');

    }
   
    public function content(){
       
        return view('content',);
    }
    public function profil(){
        
        return view('profil',);
    }
    public function publications(){
        return view('publications',);
    }
    public function users(){
        $id=request('id');
        $user=User::find($id);
        return view('users',compact('user'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
