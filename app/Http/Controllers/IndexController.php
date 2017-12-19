<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Client;

use App\Comment;

use Session;

use Image;

use Storage;

use Mail;

use Sitemap;

use App;

use URL;

class IndexController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->take(3)->get();

        $clients  = Client::orderBy('created_at', 'desc')->take(10)->get();

        $posts  = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 1)->take(1)->get();
        $post1s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 2)->take(1)->get();
        $post2s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 3)->take(1)->get();

        $post3s  = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 1)->skip(1)->take(1)->get();
        $post4s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 2)->skip(1)->take(1)->get();
        $post5s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 3)->skip(1)->take(1)->get();

        $post6s  = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 1)->skip(2)->take(1)->get();
        $post7s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 2)->skip(2)->take(1)->get();
        $post8s = Post::orderBy('created_at', 'desc')
                        ->where('category_id', '=', 3)->skip(2)->take(1)->get();
    	
        return view('master.master')
                    ->withComments($comments)
                    ->withClients($clients)
                    ->withPosts($posts)
                    ->withPost1s($post1s)
                    ->withPost2s($post2s)
                    ->withPost3s($post3s)
                    ->withPost4s($post4s)
                    ->withPost5s($post5s)
                    ->withPost6s($post6s)
                    ->withPost7s($post7s)
                    ->withPost8s($post8s);
    }

    public function postContact(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required|email',
    		'name' => 'min:3',
    		'project' => 'min:3',
    		'message' => 'min:10']);

    	$data = array(
    		'email' => $request->email,
    		'name' => $request->name,
    		'project' => $request->project,
    		'bodyMessage' => $request->message,

    		);

    	Mail::send('emails.contact', $data, function($message) use ($data)
    		{
    			$message->from($data['email']);
    			$message->to('bmngraphics@gmail.com');
    			$message->project($data['project']);
    		});

    	Session::flash('success', 'your mail was sent');

    	return redirect()->url('Index');
    }

    public function all()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);

        return view('partials.all')->withPosts($posts);
    }

    public function getSingle($slug)
        {
            $post = Post::where('slug', '=', $slug)->first();
            return view('blog.single')->withPost($post);  
        }

    public function sitemap()
    {
        $sitemap = App::make('sitemap');

        $sitemap->add(URL::to('/bmngraphics'), '2017-12-1', '1.0', 'daily');

        $posts = Post::all();

        foreach ($posts as $post) 
        {  

            $filename = $post->image;

            $sitemap->add(URL::to('partials.all', $post),
             $post->updated_at,'0.9','weekly');

            $sitemap->add(URL::to(public_path('images/' . $filename)),
                $post->updated_at, '0.8', 'weekly');
        }

         return $sitemap->render('xml');
    }

}
