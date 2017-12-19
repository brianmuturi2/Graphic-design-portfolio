<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use Session;

use Image;

use Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array(
            'category_id'       => 'required|integer',
            'title'             => 'required|max:255',
            'slug'              => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'client'            => 'required|max:255',
            'projectDate'       => 'required|max:255',
            'skills'            => 'required|max:255',
            'projectLink'       => 'required|max:255',
            'body'              => 'required|max:255',
            'featured_image'    => 'required|image',
            ));

        // store in db
        $post                   = new Post;
        $post->category_id      = $request->category_id;
        $post->title            = $request->title;
        $post->slug             = $request->slug;
        $post->client           = $request->client;
        $post->projectDate      = $request->projectDate;
        $post->skills           = $request->skills;
        $post->projectLink      = $request->projectLink;
        $post->body             = $request->body;

        $image                  = $request->file('featured_image');
        $filename               = time() . '.' . $image->getClientOriginalExtension();
        $location               = public_path('images/' . $filename);
        
        Image::make($image)->resize(640, 400)->save($location);

        $post->image            = $filename;            

        $post->save();

        Session::flash('Success', 'Post was successfully saved!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find post in db and save as var
        $post       = Post::find($id);
        $categories = Category::all();
        $cats       = array();

        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        // return view and pass in var previously created
        return view('posts.edit')->withPost($post)->withCategories($cats);
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
        // validate
        // save the data to db
        // set flash data with success message
        // redirect with flash data to posts.show
        $this->validate($request, array(
            'category_id'       => 'required|integer',
            'title'             => 'required|max:255',
            'slug'              => "required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
            'client'            => 'required|max:255',
            'projectDate'       => 'required|max:255',
            'skills'            => 'required|max:255',
            'projectLink'       => 'required|max:255','body' => 'required|max:255',
            'featured_image'    => 'required|image',
            ));

        $post                   = Post::find($id);

        $post->category_id      = $request->input('category_id');
        $post->title            = $request->input('title');
        $post->slug             = $request->input('slug');
        $post->client           = $request->input('client');
        $post->projectDate      = $request->input('projectDate');
        $post->skills           = $request->input('skills');
        $post->projectLink      = $request->input('projectLink');
        $post->body             = $request->input('body');

        $image                  = $request->file('featured_image');
        $filename               = time() . '.' . $image->getClientOriginalExtension();
        $location               = public_path('images/' . $filename);

        Image::make($image)->resize(640, 400)->save($location);

        $oldFilename            = $post->image;
        $post->image            = $filename;

        Storage::delete($oldFilename);

        $post->save();

        Session::flash('Success', 'This post was successfully saved');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);

        Storage::delete($post->image);

        $post->delete();

        Session::flash('Success', 'Post deleted');
        return redirect()->route('posts.index');
    }
}
