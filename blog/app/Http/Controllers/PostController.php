<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //insert
    function createPost(Request $request)
    {
        DB::table("posts")->insert([
            "title"=>"the 1 post",
            "content"=>"the content",
            "created_at"=>now(),
            "updated_at"=>now()
        ]);
        DB::table("posts")->insert([
            "title"=>"the 2 post",
            "content"=>"the 2 content",
            "created_at"=>now(),
            "updated_at"=>now()
        ]);
        DB::table("posts")->insert([
            "title"=>"the 3 post",
            "content"=>"the 3 content",
            "created_at"=>now(),
            "updated_at"=>now()
        ]);

        return "the post is created succesfully";
    }

    public function getPosts()
    {
        $posts = DB::table("posts")->get();
        return view ("posts", ["posts"=>$posts]);
    }

}

