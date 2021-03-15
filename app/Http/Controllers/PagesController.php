<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to PLUMBAPP!';
<<<<<<< HEAD
=======
        //return view('pages.index',compact('title'));
>>>>>>> subsequent plumbapp changes
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
}
