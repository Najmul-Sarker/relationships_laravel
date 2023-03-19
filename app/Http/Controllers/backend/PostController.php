<?php

namespace App\Http\Controllers\backend;

use App\Models\Topic;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('backend.post.index',compact('posts'));
    }

    public function create(){
        $topics = Topic::all();
        return view('backend.post.create',compact('topics'));
    }

    public function store(Request $request){

        $request->validate([
            'description' => 'required',
        
        ],[
            "description.required"=>"Enter your description",
        ]
            
        );
        
        Post::create([
            'topic_id'=>$request->topic_id,
            'description'=>$request->description,
        ]);

        return redirect(route("post.index"))->with('success','post Created Successfully');
    }

    public function show(Post $post){
        
        return view('backend.post.show',compact('post'));
    }

    public function edit(Post $post){
        $topics = Topic::all();
        return view('backend.post.edit',compact('topics','post'));
    }


    public function update(Post $post,Request $request){

        $request->validate([
            'topic_id' => 'required',
            'description' => 'required',
            
        ],[
            "description.required"=>"Enter your description",
        ]
        
    );

    $post->update([
        
        'topic_id'=>$request->topic_id,
        "description"=>$request->description
    ]);

    return redirect(route("post.index"))->with('success','post Updated Successfully');

    }


    public function delete(Post $post){
        
        $post->delete();
        return redirect(route("post.index"))->with('success','post Deleted Successfully');

    }
}
