<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
// use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Image;



class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['except' => 'index', '/blog.show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(3);
        
        return view('blog.index', compact('posts'))
           ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $user = Auth::user();
        $post = new Post;
        // Load the existing profile
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id = $user->id;
        
        // Save the new image... if there is one in the request()!

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);    
            
            $post->image = $filename;
        }
        
        $post->save();
        return redirect('/blog')
            ->with('message', 'Your post has been added!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        
        return view('blog.show', [
            'post' => $post,
            'user' => $user
        ]);
    }       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("blog.edit", [
            'post' => $post
        ]);
            
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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $post = Post::find($id);
        // Load the existing profile
        $post->title = $request->input('title');
        $post->description = $request->input('description');

        // Save the new image... if there is one in the request()!
        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);  
            $oldFilename = $post->image;
            // update DB
            $post->image = $filename;
            // delete old photo
            Storage::delete($oldFilename);
        }

        // Now, save it all into the database
            $post->save();
        
            return redirect('/blog')
                ->with('message', 'Your post has been updated!');
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
        
        Storage::delete($post->image);

        $post->delete();
            return redirect('/blog');
    }
}
