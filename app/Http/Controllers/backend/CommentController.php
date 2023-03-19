<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('backend.comment.index',compact('comments'));
    }

    public function create(){
        $posts = Post::all();
        return view('backend.comment.create',compact('posts'));
    }

    public function store(Request $request){

        $request->validate([
            'post_id'=>'required',
            'description' => 'required',
        
        ],[
            "description.required"=>"Enter your description",
        ]
            
        );
        
        Comment::create([
            'post_id'=>$request->post_id,
            'description'=>$request->description,
        ]);

        return redirect(route("comment.index"))->with('success','comment Created Successfully');
    }

    public function show(Comment $comment){
        
        return view('backend.comment.show',compact('comment'));
    }

    public function edit(Comment $comment){
        $posts = Post::all();
        return view('backend.comment.edit',compact('posts','comment'));
    }


    public function update(Comment $comment,Request $request){

        $request->validate([
            'post_id' => 'required',
            'description' => 'required',
            
        ],[
            "description.required"=>"Enter your description",
        ]
        
    );

    $comment->update([
        
        'post_id'=>$request->post_id,
        "description"=>$request->description
    ]);

    return redirect(route("comment.index"))->with('success','comment Updated Successfully');

    }


    public function delete(Comment $comment){
        
        $comment->delete();
        return redirect(route("comment.index"))->with('success','comment Deleted Successfully');

    }
}
