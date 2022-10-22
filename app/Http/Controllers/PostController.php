<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
            ['id' => 2, 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
            ['id' => 3, 'title' => 'Day1 Laravel lab', 'posted_by' => 'Mohamed Maged', 'creation_date' => '2022-10-22'],

        ];

        return view('posts.index', [
            'posts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function update()
    {
        return view('posts.update');
    }
    
    public function delete()
    {
        return view('posts.delete');
    }
    public function show()
    {
        
         return view('posts.show');
    }
    // public function show($postId)
    // {
    //     $arr = [
    //         ['id' => 1, 'category' => 'test']
    //     ];
    //     return view('posts.show');

    //     // return 'we are in show now';
    // }


    public function store()
    {
        dd('we are storing the data');
    }
}
