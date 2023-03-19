<?php

namespace App\Http\Controllers\backend;

use App\Models\topic;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('backend.post.index',compact('posts'));
    }

    public function create(){
        $topics = topic::all();
        return view('backend.post.create',compact('topics'));
    }

    public function store(Request $request){

        $request->validate([
            'description' => 'required',
        
        ],[
            "description.required"=>"Enter your description",
        ]
            
        );
        
        post::create([
            'topic_id'=>$request->topic_id,
            'description'=>$request->description,
        ]);

        return redirect(route("post.index"))->with('success','post Created Successfully');
    }

    public function show(post $post){
        
        return view('backend.post.show',compact('post'));
    }

    public function edit(post $post){
        $topics = topic::all();
        return view('backend.post.edit',compact('topics','post'));
    }


    public function update(post $post,Request $request){

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


    public function delete(post $post){
        
        $post->delete();
        return redirect(route("post.index"))->with('success','post Deleted Successfully');

    }
}
