<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Exception;
use Auth;
class PostController extends Controller
{   
    public function CreatePost(){
       $category = Category::all();
       return view('user.pages.post',compact('category'));
    }
    public function StorePost(Request $request,$uid){
           
            try {
                // return $request;
                $photo      = $request->file('image');
                $photo_name = date('Ymdhms.') . $photo->getClientOriginalExtension();
                 
                $post = Post::create([
                    "user_id"     => $uid,
                    "category_id" => $request->category,
                    "title"       => $request->title,
                    "slug"        => $request->slug,
                    "details"     => $request->details,
                    "photo"       => $photo_name 
                ]);

                if ($post) $photo->storeAs('public/image',$photo_name);

                return response()->json([
                    'success' => true,
                    'message' => 'Post has been succesfully created.'
                ]);

            }catch (Exception $e) {
                return response()->json(['unable' => $e]);
            }            

    }
    public function ViewPost(){
        $data = Post::join('categories', 'categories.id', '=', 'posts.category_id')
               ->get(['posts.*', 'categories.name']);
        // $user = Post::join('users', 'users.id', '=', 'posts.user_id')
        // ->get(['users.name']);     
         return view('user.pages.postview',compact('data'));       
    }
    public function EditPost($id){
        $post_id = $id;
        $data = Post::findOrFail($id);
        $cat = Category::all();
        return view('user.pages.updatepost',compact('data','cat','post_id'));       
    }

    public function UpdatePost(Request $request, $id){

            try {
                // return $request;
                $photo      = $request->file('image');
                $photo_name = date('Ymdhms.') . $photo->getClientOriginalExtension();
                $post = Post::findOrFail($id)->update([

                    "category_id" => $request->category,
                    "title"       => $request->title,
                    "slug"        => $request->slug,
                    "details"     => $request->details,
                    "photo"       => $photo_name ,
                    "status"      => $request->status,
                ]);
                if ($post) $photo->storeAs('public/image',$photo_name);
                return response()->json([
                    'success' => true,
                    'message' => 'Category has been succesfully Updated.'
                ]);

            }catch (Exception $e) {
                return response()->json(['unable' => $e]);
            }                      
    }

    public function index(){
        $data = Post::join('categories', 'categories.id', '=', 'posts.category_id')
        ->get(['posts.*', 'categories.name']);

        return view('index',compact('data'));     
    }
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
