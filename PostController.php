<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\post;
use App\User;
use resources\views\userpost;

class PostController extends Controller
{
    public function index(){
        
        return view('allpost', ['posts'=>post::latest()->get()]);
    }
       
    
    public function getform(){
        return view('form');
    }
    public function getdata(Request $request){
        $this->validate($request,['body'=>'required|max:500']);
       
        $body = $request->body;
        $data =['body'=>$body];
        $name=auth()->user()->name;
        $post = new post(['user_name'=>$name, 'body'=>$body]);
        $post->save();
        return view('data', $data);

    }
    public function mypost(){
        return view('userpost', ['posts'=>auth()->user()->timeline()->toArray()]);
        
    }
    
    public function edit($id){
        $post=post::find($id);
        
        return view('edit', compact('id','post'));
    }

    public function update(Request $request, $id){
        $this->validate($request,['body'=>'required|max:500']);
        $post=post::find($id);
        $post->body = $request->get('body');
        $post->save();
        return view('userpost', ['posts'=>auth()->user()->timeline()->toArray()]);

    }

    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return view('userpost', ['posts'=>auth()->user()->timeline()->toArray()]);
    }
}
