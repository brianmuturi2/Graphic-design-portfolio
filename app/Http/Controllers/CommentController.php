<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use Image;

use Storage;

use Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $comments = Comment::orderBy('id', 'desc')->paginate(3);
        return view('comments.index')->withComments($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'name'              => 'required|max:60',
            'body'              => 'required|max:255',

            'featured_photo'    => 'required|image',
            ));

        $comment                = new Comment;

        $comment->name          = $request->name;
        $comment->body          = $request->body;

        $photo                  = $request->file('featured_photo');
        $filename               = time() . '.' . $photo->                       getClientOriginalExtension();
        $location               = public_path('images/' . $filename);
        
        Image::make($photo)->resize(200, 200)->save($location);

        $comment->photo         = $filename;            

        $comment->save();

        Session::flash('Success', 'Comment was successfully saved!');

        return redirect()->route('comments.show', $comment->id);
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
        $comment                    = Comment::find($id);
        return view('comments.show')->withComment($comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comment                    = Comment::find($id);
        return view('comments.edit')->withComment($comment);

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
        //
        $this->validate($request, array(
            'name'              => 'required|max:60',
            'body'              => 'required|max:255',

            'featured_photo'    => 'required|image',
            ));

        $comment                = Comment::find($id);

        $comment->name          = $request->input ('name');
        $comment->body          = $request->input ('body');

        $photo                  = $request->file('featured_photo');
        $filename               = time() . '.' . $photo->                       getClientOriginalExtension();
        $location               = public_path('images/' . $filename);
        
        Image::make($photo)->resize(200, 200)->save($location);

        $oldFilename            = $comment->photo;
        $comment->photo         = $filename;

        Storage::delete($oldFilename);
        $comment->save();

        Session::flash('Success', 'Comment was successfully saved!');

        return redirect()->route('comments.show', $comment->id);
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
        $comment = Comment::find($id);

        Storage::delete($comment->photo);

        $comment->delete();

        Session::flash('Success', 'Comment deleted');
        return redirect()->route('comments.index');
    }
}
