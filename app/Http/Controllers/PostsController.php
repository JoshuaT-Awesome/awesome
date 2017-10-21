<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('id', 'DESC')
        ->simplePaginate(3);

        return view('layouts.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
        if (request()->has('blog_image')) {
    request()->file('blog_image')->store('public');
}
*/       

        $this->validate(request(),  [

                'title' => 'required',
                'body' => 'required', 
                'file' => 'nullable',
            ]);


        Post::create(request(['title', 'body', 'file']));


        if (Input::hasFile('file'))
        {    
            /*
            $file = Input::file('file');
            $file->move(public_path() . '/images/', $file->getClientOriginalName() );
            
            

            $file = $request->file;
            $path = $request->file->store('images');
            $name = $file->getClientOriginalName();
                $size = $file->getSize();
                $mime = $file->getMimeType();
                */
             //$post->file = $file->getClientOriginalName();

            /*
            return [
                'path'  =>  $file->getRealPath(),
                'size'  =>  $file->getSize(),
                'mime'  =>  $file->getMimeType(),
                'name'  =>  $file->getClientOriginalName(),
                'extenstion'    =>  $file->getClientOriginalExtension()
            ];*/ 
$file = $request->file('file');
$fileExt = $file->guessClientExtension();
$fileName = strtolower(str_replace(" ", "_", $request->input('file'))) . "_" . time();
$name = $file->getClientOriginalName();
$file->storeAs(
    'public', $fileName.".".$fileExt
);
            dd($name);
        }
                    
      
        return redirect('/posts');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('layouts.posts.show', compact('post'));
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
    }
}
