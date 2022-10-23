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
        // $allPosts = [
        //     ['id' => 1, 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
        //     ['id' => 2, 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
        //     ['id' => 3, 'title' => 'Day1 Laravel lab', 'posted_by' => 'Mohamed Maged', 'creation_date' => '2022-10-22'],

        // ];

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
    }
    public function update()
    {
        return view('posts.update');
    }
    
    public function delete($post)
    {

        POST::where('id',$post)->delete();
        // return view('posts.delete');
    }
    // public function show()
    // {
        
    //      return view('posts.show');
    // }
    public function show($postId)
    {
        $arr = [
            ['id' => 1 , 'category' => 'test']
        ];
        $post = Post::find($postId);
        return 'we are in show now'; 
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
