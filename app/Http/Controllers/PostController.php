<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //
    public function index(){
        $posts =Post::all();
        // dd($posts);

        // print($posts);
        // dd("fd");
        return view("post.index",['posts'=>$posts]);
    }
    public function storeComment(Request $request,$postid,$userid){
        $post=Post::find($postid);
        $user=User::find($userid);
        $comments=Comment::where("post_id",$postid)->get();


        $comment = $request->comment;
        Comment::create(
            [
                "user_id"=>$userid,
                "post_id"=>$postid,
                "comment"=>$comment,
            ]
        );
        return view("post.show",["post"=>$post,"user"=>$user,"comments"=>$comments]);

    } // saves to db  post
    public function show($postid,$userid){
        $comments=Comment::where("post_id",$postid)->get();
        $post =Post::find($postid);
        $user =User::find($userid);
        return view("post.show",["post"=>$post,"user"=>$user,"comments"=>$comments]);
    }
    public function create($id){
        $user=User::find($id);
        return view("post.create",["user"=>$user]);
        
    }
    public function store(Request $request){

        //get data
        // $data=$_POST; return $data; //1
        $data=$request->all(); 
        // return $data; //2
        
        // validate
        $validator = Validator::make( $data, [
            "title" => "required|string|max:50",
            "discription" => "required",
            "user_id" => "required",

            
        ]);
        if ($validator->fails()) {
            return response()->json([
                "msg" => $validator->errors()
            ], 301);
        }
        // dd($data);
        //store in data base
        $post=Post::create($data);
        //return
        // return view("post.index"); //1
        return to_route("user.loginForm");//2
        
    }
    public function edit($postid,$userid){
        $post =Post::find($postid);
        $user =User::find($userid);

        if($post['user_id']===$user['id']){

            return view("post.edit",['post'=>$post]);
        }else{
           
            return view("user.login",[ $message="you cant edit on it"]);
        }
        
    }
   public function update(Request $request,$postid){
    //get data
    $data=$request->all();
    $post=Post::find($postid);
    if($request->title && !$request->discription){
        $title=$request->title;
        $discription=$post['discription'];
    }else if(!$request->title && $request->discription){
        $title=$post['title'];
        $discription=$request->discription;
    }else if(!$request->title && !$request->discription){
        $title=$post['title'];
        $discription=$post['discription'];
    }else{
        $title=$request->title;
        $discription=$request->discription;
    }
    

    //validate
    $validator=Validator::make($data , [    
        "title" => "string|max:50",
            
    ]);

    $post->update([
        "title"=>$title,
        "discription"=> $discription
    ]);


    //update


    //return
    return view("user.login");

   }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return to_route("user.loginForm");
    }
}
