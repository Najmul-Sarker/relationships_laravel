<?php

namespace App\Http\Controllers\backend;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Forum;

class TopicController extends Controller
{
    public function index(){
        $topics = Topic::all();
        return view('backend.topic.index',compact('topics'));
    }

    public function create(){
        $forums = Forum::all();
        return view('backend.topic.create',compact('forums'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => ['required',Rule::unique('topics','title')],
        
        ],[
            "title.required"=>"Enter your Title",
        ]
            
        );
        
        Topic::create([
            'title'=>$request->title,
            'forum_id'=>$request->forum_id,
            'description'=>$request->description,
        ]);

        return redirect(route("topic.index"))->with('success','topic Created Successfully');
    }

    public function show(Topic $topic){
        
        return view('backend.topic.show',compact('topic'));
    }

    public function edit(Topic $topic){
        $forums = Forum::all();
        return view('backend.topic.edit',compact('forums','topic'));
    }


    public function update(Topic $topic,Request $request){

        $request->validate([
            'forum_id' => 'required',
            'title' => ['required',Rule::unique('topics','title')->ignore($topic->id)],
            
        ],[
            "title.required"=>"Enter your Title",
        ]
        
    );

    $topic->update([
        
        'forum_id'=>$request->forum_id,
        "title"=>$request->title,
        "description"=>$request->description
    ]);

    return redirect(route("topic.index"))->with('success','topic Updated Successfully');

    }


    public function delete(Topic $topic){
        
        $topic->delete();
        return redirect(route("topic.index"))->with('success','topic Deleted Successfully');

    }
}
