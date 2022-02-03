<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Post;


class PostController extends Controller
{
    Public function index(){
        $allPosts =Post::all();
        return $allPosts;
    }


    Public function show($postId){
        $Post =Post::find($postId);
        return $Post;
    }

    Public function store(){
    
        $data= request()->all();
        

       $post= Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);
        return $post;
    }
}
