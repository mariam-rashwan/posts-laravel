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

        return view('posts.index', [
            'allPosts' => $allPosts
        ]);
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
        return redirect()->route('posts.index');
 

    }
    public function show($postId)
    {
        //query in db select * from posts where id = $postId
        return $postId;
    }

    public function edit()
    {
        return view('posts.edit');
    }

}
