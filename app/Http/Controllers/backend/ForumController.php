<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Forum;

class ForumController extends Controller
{
    public function index(){
        $forums = Forum::all();
        return view('backend.forum.index',compact('forums'));
    }

    public function create(){
        return view('backend.forum.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => ['required',Rule::unique('forums','title')],
        
        ],[
            "title.required"=>"Enter your Title",
        ]
            
        );
        
        Forum::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect(route("forum.index"))->with('success','Forum Created Successfully');
    }

    public function show(Forum $forum){
        
        return view('backend.forum.show',compact('forum'));
    }

    public function edit(Forum $forum){
        
        return view('backend.forum.edit',compact('forum'));
    }


    public function update(Forum $forum,Request $request){

        $request->validate([
            'title' => ['required',Rule::unique('forums','title')->ignore($forum->id)],
            
        ],[
            "title.required"=>"Enter your Title",
            "description.required"=>"Write your description here"
        ]
        
    );

    $forum->update([
        "title"=>$request->title,
        "description"=>$request->description
    ]);

    return redirect(route("forum.index"))->with('success','Forum Updated Successfully');

    }


    public function delete(Forum $forum){
        
        $forum->delete();
        return redirect(route("forum.index"))->with('success','Forum Deleted Successfully');

    }


}
