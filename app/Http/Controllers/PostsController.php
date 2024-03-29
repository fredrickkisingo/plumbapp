<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Post;
use App\User;
class PostsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //regex:/^[\pL\s\-\']+$/u- regex for letters only
        //numeric|regex:/0[0-9]{9}+$/u -regex for numbers
        
        $this->validate($request,[
            'title'=> 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'quotation_price' => 'required',
            'body'=>'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenamewithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename= pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } else {
            $fileNameToStore= 'noimage.jpg';
        }

        //create post
        $post= new Post;
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->user_id=auth()->user()->id;
        $post->quotation_price = $request -> input('quotation_price');
        $post->cover_image =$fileNameToStore;
        $post->phone_number = $request -> input('phone_number');
        $post->location=$request->input('location');
        $post->save();

        return redirect('/posts')->with('success','Job post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);

        //check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=>'required',
            'phone_number' => 'required',
            'location' => 'required',
            'quotation_price' => 'required'
        ]);

        //Handle File Update
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenamewithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename= pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just ext
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }

        //update post
        $post= Post::find($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        //if user has an image already then
        if($request->hasFile('cover_image')){
        $post->cover_image=$fileNameToStore;
    }
        $post->quotation_price = $request -> input('quotation_price');
        $post->phone_number = $request -> input('phone_number');
         $post->location=$request->input('location');
        $post->save();

        return redirect('/posts')->with('success','Job post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        if($post->cover_image !='noimage.jpg'){
            //user deleting an image
            Storage::delete('public/cover_images/'.$post->cover_image);
         }
        $post->delete();
        return redirect('/posts')->with('success','Job Removed');
    }
}
