<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function rigister_form(){
        return view("user.rigister",["message"=>"rigister"]); 
    }
    public function rigister(Request $request){

        $name =$request->name;
        $email =$request->email;
        $password =$request->password;

        $validator = Validator::make($request->all(), [
            "name" => 'string|max:100',
            "email" => 'unique:users|string|max:100',
            // 'password'=> 'string|max:200|min:5|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json([
                "msg" => $validator->errors()
            ], 301);
        }
         //hash
         $request->password = bcrypt($request->password);
         //create
         $access_token = Str::random(64);
         User::create([
            "name"=> $name,
            "email"=> $email,
            "password"=> $password,

            "access_token"=> $access_token,
            

         ]);
         return view("user.login");

    }
    public function login_form(Request $request){
        return view("user.login");
    }
    public function login(Request $request){
        $posts =Post::all();//to be able to move to posts page with data of posts
        $password=$request->password;
        $email =$request->email; 
        $user = User :: where ('email',$email)
        ->first();
        $password_checked = Hash::check($request->password, $user->password);
        if($password_checked){
      
        
            $access_token = Str::random(64);
            $user->update([
                'access_token'=> $access_token,
            ]);
            return view("post.index",['user'=>$user,'posts'=>$posts]);

        
        }else{
       
            return view("user.rigister",["message"=>"password is incorrect"]);
        }
        // dd($user);    
    }
    public function logout(Request $request){}

    public function show($userid){
        $user = User::where("id",$userid)->first();
        $posts=Post::where("user_id",$userid)->get();
        return view("user.profile",["user"=>$user,"posts"=>$posts]);
    }
    

}