<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $allPosts = Post::all();

        return view('posts.index', [
            'posts' => $allPosts
        ]);
    }

    public function create()
    {
        $allUsers = User::all();

        return view('posts.create',[
            'allUsers' => $allUsers
        ]);
        // return 'we are in create now'; 

    }



function update($postId, Request $request){   

       
           $post = Post::where('id',$postId)->update([
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => $request->user_id,
                
            ]);

            return redirect()->route('posts.index');
      
    }



    
    
    function edit($postId){
        $Users = User::all();
        $post = Post::find($postId);

        return view('Posts.edit',[
            'allUsers' => $Users,'post'=>$post
        ]);
    }

    public function destroy($postId)
    {
        $post = Post::where('id',$postId)->delete();

    }
   
    public function show($postId)
    {
        
        $post = Post::find($postId);
        // return 'we are in show now'; 
        return view('posts.show',['post'=>$post]);
    }


    public function store()
    {
         $data = request()->all();

        Post::create([
            'title' => request()->title,
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]); 
        return to_route('posts.index');
        // dd('we are storing the data');
    }
}
