<?php

namespace App\Http\Controllers;

use App\Models\User; 
use  App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts =Post::all();

        //   dd($allPosts); 

        // return view('posts.index', compact('posts'),[
        //     'allPosts' => $allPosts
        // ]);
        // dd(compact('allPosts'));
        return view('posts.index',compact('allPosts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
      public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
       
    }

    public function store()
    {
        // dd('hmmm');
        // return 'ok';

        $data= request()->all();
        // dd($data);

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);
        return redirect()->route('posts.index')->
        with('success','Posts created successfully.');
 

    }
    public function show(Post $post )
    {

        //query in db select * from posts where id = $postId
     $allPosts=Post::find($id);
    return view('posts.show')
    ->with('allPosts',$allPosts);

    }

   


    public function edit(Post $post)
    {
        return view('posts.edit',compact('Posts'));


        // $allPosts=Post::find($id);
        // return view('posts.edit')->with('allPosts',$allPosts);
    
      
    }

    // public function update($id)
    // {
    //  $allPosts=Post::find($id);

    //     $data= request()->all();
    //     // dd($data);

    //     Post::create([
    //         'title' => $data['title'],
    //         'description' => $data['description'],
    //         'user_id' => $data['post_creator'],
    //     ]);
    //     return redirect()->route('posts.index');
 
    // }

    public function update(Request $request, Post $post)
{
    // $data    = $request->user();

    // $allPosts= $data->customers()->find($postId);
    // $allPosts->update($request->all());

    // return redirect()->route('posts.index');

    $data= request()->all();
    // dd($data);

    Post::update([
        'title' => $data['title'],
        'description' => $data['description'],
        'user_id' => $data['post_creator'],
    ]);
    return redirect()->route('posts.index')->
    with('success','Posts created successfully.');
}


public function destroy(post $post)
{
    // $data    = $request->user();

    // $allPosts= $data->customers()->find($postId);
    // $allPosts->delete();

    // return redirect()->route('posts.index');

    $post->delete();

    return redirect()->route('posts.index')
        ->with('success','Posts deleted successfully');
}


}
