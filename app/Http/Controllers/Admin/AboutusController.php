<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    //
    public function index()
    {
        $aboutus = Abouts::all();
        return view('admin.aboutus')->with('aboutus',$aboutus);
    }

    public function store(Request $request)
    {
        $aboutus= new Abouts;
        $aboutus->title= $request->input('title');
        $aboutus->subtitle= $request->input('subtitle');
        $aboutus->description= $request->input('description');
        
        $aboutus->save();
        return redirect('/aboutus')->with('status','Data added for About Us');

    }

    public function edit($id){
        $aboutus= Abouts::findOrFail($id);
        return view('admin.aboutus-edit')->with('aboutus',$aboutus);
 

    }
}
