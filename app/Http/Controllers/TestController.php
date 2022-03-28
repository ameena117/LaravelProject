<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function B1(){

        return view('books/b1'); 
        
    } public function B2(){

        return view('books/b2');
       
    } public function B3(){

        return view('books/b3');
        
    } public function B4(){

        return view('books/b4');
        
    } public function B5(){

        return view('books/b5');
       
    } public function B6(){

        return view('books/b6');
       
    } public function B7(){

        return view('books/b7');

    } public function B8(){

        return view('books/b8');
    } 
    public function B9(){

        return view('books/b9');
    }

    /*public function Posts($id)
    {
        $data=Post::findOrFail($id)->toArray();
        dd($data['id']);
    }*/
   /* public function Book(){
        return view('book');
        
    }*/
    public function Welcome(){
        return view('welcome');
    }
    public function aboutUs(){
        return view('about');
    }
    public function contactUs(){
        return view('contact');
    }
    public function lay(){
        return view('layout');
    }
    public function lit(){
        return view('literature');
    }
    public function novel(){
        return view('novel');
    }
    public function islam(){
        return view('islam');
    }
    public function eng(){
        return view('english');
    }
    public function blay(){
        return view('books/blayout');
    }
    public function Test()
    {
        return view('test');
    }
    /*public function clients()
    {
        return view('admin/clients');
    }*/
}
