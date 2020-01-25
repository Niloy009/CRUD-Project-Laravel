<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel Application!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'Welcome to About Page!';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $title = "Welcome to Services Page";
        return view('pages.services')->with('title',$title);
    }

}
