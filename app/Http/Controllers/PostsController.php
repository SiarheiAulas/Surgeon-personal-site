<?php
namespace App\Http\Controllers;

use App\Models\Post;
use \App\Http\Requests\PostsRequest;
use \App\Http\Controllers\FileController;

class PostsController extends Controller
{
    public $en_title;
    public $ru_title;
    
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        $this->ru_title='Новости';
        $this->en_title='News';
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        $posts=Post::paginate(5);
        return view('posts.news', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('posts.postcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $valid=$request->validated();
        
        $post=new Post;
        $post->ru_header=$request->input('ru_header');
        $post->en_header=$request->input('en_header');
        $post->ru_body=$request->input('ru_body');
        $post->en_body=$request->input('en_body');
        $post->url=$request->input('url');
        $post->slug=$request->input('slug');
        
        if($request->hasFile('attach')){
            $filecontroller=new FileController;
            $post->attach=$filecontroller->upload($request);
            $post->attachextension=$request->file('attach')->extension();
        }
        
        $post->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('posts.postshow', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        session(['ru_title'=>$this->ru_title, 'en_title'=>$this->en_title]);
        return view('posts.postedit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostsRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, Post $post)
    {
        $valid=$request->validated();

        $post=Post::find($post->id);
        $post->ru_header=$request->input('ru_header');
        $post->en_header=$request->input('en_header');
        $post->ru_body=$request->input('ru_body');
        $post->en_body=$request->input('en_body');
        $post->url=$request->input('url');
        $post->slug=$request->input('slug');
        
        if($request->hasFile('attach')){
            $filecontroller=new FileController;
            $post->attach=$filecontroller->upload($request);
        }        
        
        $post->save();
        return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post_del=Post::find($post->id);
        $post_del->delete();
        return redirect()->route('posts.index');
    }
}
