<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $posts = DB::table("posts")->get();
        return view ("blog.index", ["posts"=>$posts]);
    }

    function  createPost(){
        return view ("blog.create");
    }
    function storePost(Request $request)
    {
        $title= $request->input("title");
        $content= $request->input("content");
        $created_at= now();
        $updated_at= now();
        DB::table("posts")->insert([
            "title"=>$title,
            "content"=>$content,
            "created_at"=>$created_at,
            "updated_at"=>$updated_at
        ]);
        return redirect("/blogs");
    }
    function editPost($id){
        $post= DB::table("posts")->where("id",$id)->first();
        return view ("blog.edit",["post"=>$post]);
    }
    function updatePost(Request $request,$id){
        $title= $request->input("title");
        $content= $request->input("content");
        $updated_at= now();
        DB::table("posts")->where("id",$id)->update([
            "title"=>$title,
            "content"=>$content,
            "updated_at"=>$updated_at,
        ]);
        return redirect("/blogs");
    }

    function deletePost($id){
        DB::table("posts")->where("id",$id)->delete();
        return redirect("/blogs");
    }

}

